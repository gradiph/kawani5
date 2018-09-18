<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class MutationStock extends Pivot
{
    public $timestamps = FALSE;

    protected $fillable = [
        'mutation_id',
        'stock_id',
        'qty',
        'packed_at',
        'picked_at',
        'delivered_at',
    ];

    protected $casts = [
        'mutation_id' => 'integer',//unsignedInteger
        'stock_id' => 'integer',//unsignedBigInteger
        'qty' => 'integer',//smallInteger
        'packed_at' => 'datetime',//dateTime
        'picked_at' => 'datetime',//dateTime->nullable()->default(NULL)
        'delivered_at' => 'datetime',//dateTime->nullable()->default(NULL)
    ];

    protected $dates = [
        'packed_at',
        'picked_at',
        'delivered_at',
    ];
}
