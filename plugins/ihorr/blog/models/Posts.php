<?php namespace Ihorr\Blog\Models;

use Model;

/**
 * Model
 */
class Posts extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ihorr_blog_posts';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsToMany = [
        'tags' => [
            'Ihorr\Blog\Models\Tags',
            'table' => 'ihorr_blog_posts_tags'
        ],
        'categories' => [
            'Ihorr\Blog\Models\Categories',
            'table' => 'ihorr_blog_posts_categories'
        ]
    ];

    public $hasMany = [
        'comment' => [
            'Ihorr\Blog\Models\Comment',
            'key' => 'post_id'
        ]
    ];
}
