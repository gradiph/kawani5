<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Stock extends Model
{
    use SoftDeletes;

    public $timestamps = FALSE;

    protected $fillable = [
        'product_id',
        'store_id',
        'stock_opname_id',
        'qty',
        'price',
        'cost',
        'description',
    ];

    protected $casts = [
        'product_id' => 'integer',//unsignedBigInteger
        'store_id' => 'integer',//unsignedTinyInteger
        'stock_opname_id' => 'integer',//unsignedmediumInteger->nullable()->default(NULL)
        'qty' => 'integer',//smallInteger
        'price' => 'integer',//bigInteger
        'cost' => 'integer',//bigInteger
        'description' => 'string',//string->nullable()->default(NULL)
    ];

    protected $dates = [
        'deleted_at',
    ];

    /**
     * Relations
     */
    public function cashierReturns()
    {
        return $this->hasMany('App\CashierReturn');
    }

    public function customerReturns()
    {
        return $this->hasMany('App\CustomerReturn');
    }

    public function mutations()
    {
        return $this->belongsToMany('App\Mutation')->using('App\MutationStock')->withPivot('qty', 'packed_at', 'picked_at', 'delivered_at');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    public function promoRequirements()
    {
        return $this->belongsToMany('App\Promo', 'promo_requirement')->using('App\PromoRequirement')->withPivot('type', 'value', 'qty');
    }

    public function promos()
    {
        return $this->belongsToMany('App\Promo')->using('App\PromoStock')->withPivot('type', 'value', 'qty');
    }

    public function saleDetails()
    {
        return $this->hasMany('App\SaleDetail');
    }

    public function stockOpname()
    {
        return $this->belongsTo('App\StockOpname');
    }

    public function store()
    {
        return $this->belongsTo('App\Store');
    }

    public function supplierReturns()
    {
        return $this->hasMany('App\SupplierReturn');
    }
}
