<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    public $timestamps = FALSE;

    protected $fillable = [
        'supplier_id',
        'category_id',
        'size_id',
        'color_id',
        'code',
        'name',
    ];

    protected $casts = [
        'supplier_id' => 'integer',//unsignedTinyInteger
        'category_id' => 'integer',//unsignedTinyInteger
        'size_id' => 'integer',//unsignedTinyInteger
        'color_id' => 'integer',//unsignedTinyInteger
        'code' => 'string',//string(12)->unique()
        'name' => 'string',//string(100)
    ];

    protected $dates = [
        'deleted_at',
    ];

    /**
     * Relations
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function color()
    {
        return $this->belongsTo('App\Color');
    }

    public function purchases()
    {
        return $this->belongsToMany('App\Purchase')->using('App\ProductPurchase')->withPivot('qty', 'price', 'cost', 'description');
    }

    public function size()
    {
        return $this->belongsTo('App\Size');
    }

    public function stockOpnames()
    {
        return $this->belongsToMany('App\StockOpname')->using('App\ProductStockOpname')->withPivot('qty', 'price', 'cost', 'description');
    }

    public function stocks()
    {
        return $this->hasMany('App\Stock');
    }

    public function supplier()
    {
        return $this->belongsTo('App\Supplier');
    }
}
