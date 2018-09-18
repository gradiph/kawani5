<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    public $timestamps = FALSE;

    protected $fillable = [
        'code',
        'name',
    ];

    protected $casts = [
        'code' => 'string',//string(1)->unique()
        'name' => 'string',//string(50)
    ];

    protected $dates = [
        'deleted_at',
    ];

    /**
     * Relations
     */
    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
