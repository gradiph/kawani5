<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class PaymentSale extends Pivot
{
    public $timestamps = FALSE;

    protected $fillable = [
        'payment_id',
        'sale_id',
        'value',
    ];

    protected $casts = [
        'payment_id' => 'integer',//unsignedTinyInteger
        'sale_id' => 'integer',//unsignedBigInteger
        'value' => 'integer',//bigInteger
    ];
}
