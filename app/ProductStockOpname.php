<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ProductStockOpname extends Pivot
{
    public $timestamps = FALSE;

    protected $fillable = [
        'product_id',
        'stock_opname_id',
        'qty',
        'price',
        'cost',
        'description',
    ];

    protected $casts = [
        'product_id' => 'integer',//unsignedTinyInteger
        'stock_opname_id' => 'integer',//unsignedMediumInteger
        'qty' => 'integer',//smallInteger
        'price' => 'integer',//bigInteger
        'cost' => 'integer',//bigInteger
        'description' => 'string',//string->nullable()->default(NULL)
    ];
}
