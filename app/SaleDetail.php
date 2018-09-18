<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaleDetail extends Model
{
    public $timestamps = FALSE;

    protected $fillable = [
        'promo_id',
        'stock_id',
        'sale_id',
        'price',
        'cost',
        'discount',
        'qty',
    ];

    protected $casts = [
        'promo_id' => 'integer',//unsignedInteger->nullable()->default(NULL)
        'stock_id' => 'integer',//unsignedBigInteger
        'sale_id' => 'integer',//unsignedBigInteger
        'price' => 'integer',//bigInteger
        'cost' => 'integer',//bigInteger
        'discount' => 'integer',//bigInteger
        'qty' => 'integer',//smallInteger
    ];

    /**
     * Relations
     */
    public function customerReturns()
    {
        return $this->hasMany('App\CustomerReturn');
    }

    public function discount()
    {
        return $this->hasOne('App\Discount');
    }

    public function promo()
    {
        return $this->belongsTo('App\Promo');
    }

    public function stock()
    {
        return $this->belongsTo('App\Stock');
    }

    public function sale()
    {
        return $this->belongsTo('App\Sale');
    }
}
