<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    public $timestamps = FALSE;

    protected $fillable = [
        'invoice_number',
        'from',
        'image',
        'created_at',
    ];

    protected $casts = [
        'invoice_number' => 'string',//string
        'from' => 'string',//string
        'image' => 'string',//string(255)->nullable()->default(NULL)
        'created_at' => 'datetime',//dateTime
    ];

    protected $dates = [
        'created_at'
    ];

    /**
     * Relations
     */
    public function products()
    {
        return $this->belongsToMany('App\Product')->using('App\ProductPurchase')->withPivot('qty', 'price', 'cost', 'description');
    }
}
