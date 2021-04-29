<?php namespace Ihorr\Blog;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Ihorr\Blog\Components\Blog'  => 'blogLook',
            'Ihorr\Blog\Components\BlogPost'  => 'blogPost',
            'Ihorr\Blog\Components\Categories'  => 'CategoriesLook',
            'Ihorr\Blog\Components\Tags'  => 'TagsLook'

        ];
    }

    public function registerSettings()
    {
    }
}
