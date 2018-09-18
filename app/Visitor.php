<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    public $timestamps = FALSE;

    protected $fillable = [
        'store_id',
        'date',
        'qty',
    ];

    protected $casts = [
        'store_id' => 'integer',//unsignedTinyInteger
        'date' => 'date',//date
        'qty' => 'integer',//unsignedSmallInteger
    ];

    protected $dates = [
        'date',
    ];

    /**
     * Relations
     */
    public function store()
    {
        return $this->belongsTo('App\Store');
    }
}
