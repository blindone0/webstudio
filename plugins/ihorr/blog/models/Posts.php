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

    public $morphToMany = [
        'tags' => ['Ihorr\Blog\Models\Tags', 'name' => 'ihorr_blog_tag']
    ];
}
