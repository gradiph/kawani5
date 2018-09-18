<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;

    public $timestamps = FALSE;

    protected $fillable = [
        'name',
    ];

    protected $casts = [
        'name' => 'string',//string(50)
    ];

    protected $dates = [
        'deleted_at',
    ];

    /**
     * Relations
     */
    public function users()
    {
        return $this->hasMany('App\User');
    }
}
