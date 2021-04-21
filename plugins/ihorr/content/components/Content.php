<?php namespace Ihorr\Content\Components;

use Cms\Classes\ComponentBase;
use Ihorr\Content\Models\Service as ServicesModel;

class Content extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Content Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
    
    public function getAllServices()
    {
        $services = ServicesModel::all();//collection ()

        return $services->toArray();
    }
}
