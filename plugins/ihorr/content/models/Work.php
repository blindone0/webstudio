<?php namespace Ihorr\Content\Models;

use Model;

/**
 * Model
 */
class Work extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ihorr_content_works';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
