<?php namespace Ihorr\Content\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Works extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Ihorr.Content', 'main-menu-item-content', 'side-menu-item');
    }
}