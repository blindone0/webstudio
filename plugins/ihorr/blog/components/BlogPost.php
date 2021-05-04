<?php namespace Ihorr\Blog\Components;

use Cms\Classes\ComponentBase;
use Ihorr\Blog\Models\Posts as PostModel;
use Ihorr\Blog\Models\Comment as CommentModel;
use Input;

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
        $post = PostModel::with(['tags','comment'])->whereId($post_id)->firstOrCreate(
            ['id' => $post_id],
            [
                'title' => 'Новый тайтл',
                'content' => 'Какой-то текст'
            
            ]
            );

        return $post;
    }

    public function getAllPosts()
    {
        $posts = PostModel::all();

        return response()->json($posts);
    }


    public function createComment()
    {
        $vars = Input::all();

        if ($vars) {

            $model = new CommentModel;

            $model->author = $vars['author'];

            $model->text = $vars['text'];

            $model->post_id = $vars['post_id'];

            $model->save();
        }

    }
}
