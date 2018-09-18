<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLog extends Model
{
    public $timestamps = FALSE;

    protected $fillable = [
        'user_id',
        'created_at',
        'description',
        'queryable_id',
        'queryable_type',
    ];

    protected $casts = [
        'user_id' => 'integer',//unsignedInteger
        'created_at' => 'datetime',//dateTime
        'description' => 'string',//string
        'queryable_id' => 'integer',//unsignedBigInteger
        'queryable_type' => 'string',//string
    ];

    protected $dates = [
        'created_at',
    ];

    /**
     * Relations
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
