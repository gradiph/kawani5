<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ErrorLog extends Model
{
    public $timestamps = FALSE;

    protected $fillable = [
        'user_id',
        'ip_address',
        'description',
        'action',
        'errorThrown',
        'status',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'user_id' => 'integer',//unsignedBigInteger->nullable()
        'ip_address' => 'string',//ipAddress
        'description' => 'string',//string
        'action' => 'string',//string
        'errorThrown' => 'text',//text
        'status' => 'string',//enum['Waiting', 'Process', 'Clear']
        'created_at' => 'datetime',//dateTime
        'updated_at' => 'datetime',//dateTime
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
