<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    public $timestamps = FALSE;

    protected $fillable = [
        'type',
        'name',
        'value',
        'description',
        'created_at',
    ];

    protected $casts = [
        'type' => 'string',//string(50)
        'name' => 'string',//string(50)
        'value' => 'integer',//bigInteger->unsigned()
        'description' => 'string',//string->nullable()->default(NULL)
        'created_at' => 'datetime',//dateTime
    ];

    protected $dates = [
        'created_at',
    ];
}
