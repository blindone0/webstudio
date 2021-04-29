<?php namespace Ihorr\Blog\Components;

use Cms\Classes\ComponentBase;
use Ihorr\Blog\Models\Posts as PostModel;

class BlogPost extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'BlogPost Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [
            'post_id' => [
                'title' => 'Post_id',
                'default' => '{{ :post_id }}',
                'type' => 'string'
                ]
        ];
    }

    public function getPost()
    {
        $post_id = $this->property('post_id');
        $post = PostModel::with(['tags'])->whereId($post_id)->first();
        return $post;
    }
}
