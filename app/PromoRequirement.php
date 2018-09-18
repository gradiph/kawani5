<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class PromoRequirement extends Pivot
{
    public $timestamps = FALSE;

    protected $fillable = [
        'promo_id',
        'stock_id',
        'type',
        'value',
        'qty',
    ];

    protected $casts = [
        'promo_id' => 'integer',//unsignedInteger
        'stock_id' => 'integer',//unsignedBigInteger
        'type' => 'integer',//tinyInteger
        'value' => 'integer',//float(9, 2)
        'qty' => 'integer',//smallInteger
    ];
}
