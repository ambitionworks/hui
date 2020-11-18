<?php

namespace AmbitionWorks\Hui;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;
use Illuminate\View\Engines\CompilerEngine;

class HuiServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->registerHui();
        $this->registerBladeCompiler();
    }

    public function boot()
    {
        if (! $this->app->runningInConsole()) {
            $this->configureComponents();
            $this->bootHui();
        }

        $this->commands([
            Console\InstallCommand::class,
        ]);
    }

    protected function registerHui()
    {
        $this->app->bind('hui', function () {
            return new class {
                private static $cache = [];
                public function track($usage) {
                    self::$cache[$usage] = true;
                    return $usage;
                }
                public function dump() {
                    return array_keys(self::$cache);
                }
            };
        });
    }

    protected function bootHui()
    {
        Blade::directive('huislot', function ($expression) {
            $expression = str_replace(['\'', '"'], '', $expression);
            return '<?php /* HUISLOT */ if(isset($'.$expression.')) { $__env->slot(\''.$expression.'\'); echo e($'.$expression.'); $__env->endSlot(); } ?>';
        });

        Blade::directive('hui', function ($expression) {
            $values = explode(',', $expression);
            $format = array_shift($values);

            return '<?php /* HUITRACK */ app("hui")->track(sprintf(' . $format . ', ' . implode(', ', $values) . ')); ?>';
        });
    }

    protected function configureComponents()
    {
        $components = [
            'alert',
            'badge',
            'button',
            'card',
            'col',
            'container',
            'divider',
            'list',
            'list.accordion-item',
            'list.collapsible-item',
            'list.item',
            'loading',
            'modal',
            'page',
            'page.footer',
            'page.header',
            'popover',
            'row',
            'slide-out',
            'tabs',
            'tabs.content',
            'tabs.handle',
            'text',
        ];
        $this->callAfterResolving(BladeCompiler::class, function () use ($components) {
            foreach ($components as $component) {
                Blade::component('components.hui.'.$component, 'hui-'.$component);
            }
        });
    }

    public function registerBladeCompiler()
    {
        $this->app->singleton('blade.compiler', function ($app) {
            return tap(new HuiBladeCompiler($app['files'], $app['config']['view.compiled']), function ($blade) {
                $blade->component('dynamic-component', DynamicComponent::class);
            });
        });
    }

    public function registerBladeEngine($resolver)
    {
        $resolver->register('blade', function () {
            return new CompilerEngine($this->app['blade.compiler']);
        });
    }
}
