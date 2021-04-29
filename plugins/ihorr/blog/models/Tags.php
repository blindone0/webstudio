<?php namespace Ihorr\Blog\Models;

use Model;

/**
 * Model
 */
class Tags extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'ihorr_blog_tags';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsToMany = [
        'posts' => [
            'Ihorr\Blog\Models\Posts',
            'table' => 'ihorr_blog_posts_tags'
        ],
        'services' => [
            'Ihorr\Content\Models\Service',
            'table' => 'ihorr_content_services_tags'
        ]

    ];
}
