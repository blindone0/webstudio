<?php namespace Ihorr\Blog\Components;

use Cms\Classes\ComponentBase;
use Ihorr\Blog\Models\Posts as PostModel;

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
        $posts = PostModel::all();//collection ()

        return $posts->toArray();
    }

    public function getAllPostsByCategorie()
    {
        $cat_id = $this->property('categorie_id');
     
        $posts_by_cat = PostModel::with(['tags', 'categories'])->whereId($cat_id)->get();
        
        return $posts_by_cat;
    }
}
