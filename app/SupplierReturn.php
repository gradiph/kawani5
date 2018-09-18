<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupplierReturn extends Model
{
    public $timestamps = FALSE;

    protected $fillable = [
        'stock_id',
        'created_at',
        'qty',
        'description',
    ];

    protected $casts = [
        'stock_id' => 'integer',//unsignedBigInteger
        'created_at' => 'datetime',//dateTime
        'qty' => 'integer',//smallInteger
        'description' => 'string',//string
    ];

    protected $dates = [
        'created_at',
    ];

    /**
     * Relations
     */
    public function stock()
    {
        return $this->belongsTo('App\Stock');
    }
}
