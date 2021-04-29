<?php namespace Ihorr\Blog\Models;

use Model;

/**
 * Model
 */
class Categories extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ihorr_blog_categories';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsToMany = [
        'posts' => [
            'Ihorr\Blog\Models\Posts',
            'table' => 'ihorr_blog_posts_categories'
        ]
    ];
}
