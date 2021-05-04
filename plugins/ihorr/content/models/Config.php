<?php namespace Ihorr\Content\Models;

use Model;

/**
 * Model
 */
class Config extends Model
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
    public $table = 'ihorr_content_services';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
