<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Post
 * @package App\Models
 * @version May 12, 2022, 6:04 pm UTC
 *
 * @property integer $user_id
 * @property string $title
 * @property string $description
 */
class Post extends Model
{
    use SoftDeletes;

    use HasFactory;
     /**
     * The name of the "created at" column.
     *
     * @var string
     */
    const CREATED_AT = 'publication_date';
    
    /**
     * The name of the "updated at" column.
     *
     * @var string
     */
    const UPDATED_AT = 'updated_at';

    public $table = 'posts';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'title',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'title' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'description' => 'required'
    ];

    
}
