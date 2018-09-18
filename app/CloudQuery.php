<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CloudQuery extends Model
{
    public $timestamps = FALSE;

    protected $fillable = [
        'created_at',
        'query',
        'executed_at',
        'user_logable_id',
        'user_logable_type',
    ];

    protected $casts = [
        'created_at' => 'datetime',//dateTime
        'query' => 'string',//text
        'executed_at' => 'datetime',//dateTime,nullable()->default(NULL);
        'user_logable_id' => 'integer',//bigInteger,unsigned()->nullable()->default(NULL);
        'user_logable_type' => 'string',//string(64)
    ];

    protected $dates = [
        'created_at',
        'executed_at',
    ];
}
