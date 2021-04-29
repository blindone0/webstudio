<?php namespace Ihorr\Blog\Components;

use Cms\Classes\ComponentBase;
use Ihorr\Blog\Models\Tags as TagsModel;

class Tags extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Tags Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function getAllTags()
    {
        $tags = TagsModel::all();//collection ()

        return $tags->toArray();
    }
}
