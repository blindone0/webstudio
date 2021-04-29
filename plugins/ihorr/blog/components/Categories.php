<?php namespace Ihorr\Blog\Components;

use Cms\Classes\ComponentBase;
use Ihorr\Blog\Models\Categories as CategoriesModel;

class Categories extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Categories Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function getAllCategories()
    {
        $categories = CategoriesModel::all();//collection ()

        return $categories->toArray();
    }
}
