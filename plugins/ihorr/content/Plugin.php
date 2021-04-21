<?php namespace Ihorr\Content;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Ihorr\Content\Components\Content'  => 'contentLook'
        ];
    }

    public function registerSettings()
    {
    }
}
