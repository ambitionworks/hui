<?php

namespace AmbitionWorks\Hui;

use Illuminate\View\Compilers\BladeCompiler;

class HuiBladeCompiler extends BladeCompiler
{
    /**
     * Compile the view at the given path.
     *
     * @param  string|null  $path
     * @return void
     */
    public function compile($path = null)
    {
        if ($path) {
            $this->setPath($path);
        }

        if (! is_null($this->cachePath)) {
            $contents = $this->compileString($this->files->get($this->getPath()));

            if (! empty($this->getPath())) {
                $contents = $this->appendFilePath($contents);
            }

            $contents = $this->appendTailwind($contents);

            $this->files->put(
                $this->getCompiledPath($this->getPath()), $contents
            );
        }
    }

    private function appendTailwind($contents)
    {
        $classes = implode("\n", app('hui')->dump());

        return $contents."<?php /* {$classes} */ ?>";
    }
}
