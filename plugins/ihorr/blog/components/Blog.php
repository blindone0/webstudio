<?php namespace Ihorr\Blog\Components;

use Cms\Classes\ComponentBase;
use Ihorr\Blog\Models\Posts as PostsModel;

class Blog extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Blog post',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
    
    public function getAllServices()
    {
        $posts = PostsModel::all();//collection ()

        return $posts->toArray();
    }
}
