<?php namespace Ihorr\Content\Models;

use Model;

/**
 * Model
 */
class Service extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ihorr_content_services';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
