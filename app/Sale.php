<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public $timestamps = FALSE;

    protected $fillable = [
        'user_id',
        'store_id',
        'created_at',
        'price_total',
        'cost_total',
        'discount_total',
        'qty_total',
        'money_paid',
        'invoice_printed',
    ];

    protected $casts = [
        'user_id' => 'integer',//unsignedInteger
        'store_id' => 'integer',//unsignedTinyInteger
        'created_at' => 'datetime',//dateTime
        'price_total' => 'integer',//bigInteger
        'cost_total' => 'integer',//bigInteger
        'discount_total' => 'integer',//bigInteger
        'qty_total' => 'integer',//smallInteger
        'money_paid' => 'integer',//bigInteger
        'invoice_printed' => 'boolean',//tinyInteger->default(0)
    ];

    protected $dates = [
        'created_at',
    ];

    /**
     * Relations
     */
    public function details()
    {
        return $this->hasMany('App\SaleDetail');
    }

    public function payments()
    {
        return $this->belongsToMany('App\Payment')->using('App\PaymentSale')->withPivot('value');
    }

    public function store()
    {
        return $this->belongsTo('App\Store');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
