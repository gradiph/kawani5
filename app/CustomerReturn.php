<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerReturn extends Model
{
    public $timestamps = FALSE;

    protected $fillable = [
        'stock_id',
        'sale_detail_id',
        'created_at',
        'qty',
        'description',
        'back_to_store',
    ];

    protected $casts = [
        'stock_id' => 'integer',//unsignedBigInteger
        'sale_detail_id' => 'integer',//unsignedBigInteger->nullable()->default(NULL)
        'created_at' => 'datetime',//dateTime
        'qty' => 'integer',//smallInteger
        'description' => 'string',//string
        'back_to_store' => 'boolean',//tinyInteger
    ];

    protected $dates = [
        'created_at',
    ];

    /**
     * Relations
     */
    public function saleDetail()
    {
        return $this->belongsTo('App\SaleDetail');
    }

    public function stock()
    {
        return $this->belongsTo('App\Stock');
    }
}
