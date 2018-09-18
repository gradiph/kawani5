<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CashierReturn extends Model
{
    public $timestamps = FALSE;

    protected $fillable = [
        'user_id',
        'stock_id',
        'created_at',
        'qty',
        'description',
    ];

    protected $casts = [
        'user_id' => 'integer',//unsignedInteger
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
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function stock()
    {
        return $this->belongsTo('App\Stock');
    }
}
