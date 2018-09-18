<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    public $timestamps = FALSE;

    protected $fillable = [
        'name',
        'value',
    ];

    protected $casts = [
        'name' => 'string',//string(50)
        'value' => 'string',//string(50)
    ];
}
