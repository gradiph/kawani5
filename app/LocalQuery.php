<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocalQuery extends Model
{
    public $timestamps = FALSE;

    protected $fillable = [
        'created_at',
        'query',
        'uploaded_at',
        'user_logable_id',
        'user_logable_type',
    ];

    protected $casts = [
        'created_at' => 'datetime',//dateTime
        'query' => 'string',//text
        'uploaded_at' => 'datetime',//dateTime,nullable()->default(NULL);
        'user_logable_id' => 'integer',//bigInteger,unsigned()->nullable()->default(NULL);
        'user_logable_type' => 'string',//string(64)
    ];

    protected $dates = [
        'created_at',
        'uploaded_at',
    ];
}
