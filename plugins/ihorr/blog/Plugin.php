<?php namespace Ihorr\Blog;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Ihorr\Blog\Components\Blog'  => 'blogLook'
        ];
    }

    public function registerSettings()
    {
    }
}
