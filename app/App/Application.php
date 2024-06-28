<?php

namespace App;

use Illuminate\Foundation\Application as LaravelApplication;

class Application extends LaravelApplication
{
    /**
     * Get the path to the application "app" directory.
     *
     * @param  string  $path
     * @return string
     */
    public function path($path = ''): string
    {
        return $this->joinPaths($this->appPath ?: $this->basePath('app/App'), $path);
    }
}
