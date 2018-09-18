<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StockOpname extends Model
{
    public $timestamps = FALSE;

    protected $fillable = [
        'store_id',
        'description',
        'started_at',
        'finished_at',
        'can_edit',
    ];

    protected $casts = [
        'store_id' => 'integer',//unsignedTinyInteger
        'description' => 'string',//string(100)->nullable()->default(NULL)
        'started_at' => 'datetime',//dateTime
        'finished_at' => 'datetime',//dateTime->nullable()->default(NULL)
        'can_edit' => 'boolean',//tinyInteger->default(0);
    ];

    protected $dates = [
        'started_at',
        'finished_at',
    ];

    /**
     * Relations
     */
    public function products()
    {
        return $this->belongsToMany('App\Product')->using('App\ProductStockOpname')->withPivot('qty', 'price', 'cost', 'description');
    }

    public function stocks()
    {
        return $this->hasMany('App\Stock');
    }

    public function store()
    {
        return $this->belongsTo('App\Store');
    }

}
