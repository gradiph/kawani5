<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ProductPurchase extends Pivot
{
    public $timestamps = FALSE;

    protected $fillable = [
        'product_id',
        'purchase_id',
        'qty',
        'price',
        'cost',
        'description',
    ];

    protected $casts = [
        'product_id' => 'integer',//unsignedTinyInteger
        'purchase_id' => 'integer',//unsignedBigInteger
        'qty' => 'integer',//smallInteger
        'price' => 'integer',//bigInteger
        'cost' => 'integer',//bigInteger
        'description' => 'string',//string->nullable()->default(NULL)
    ];
}
