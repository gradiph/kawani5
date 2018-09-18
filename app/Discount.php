<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Discount extends Model
{
    use SoftDeletes;

    public $timestamps = FALSE;

    protected $fillable = [
        'user_id',
        'sale_detail_id',
        'type',
        'value',
        'created_at',
    ];

    protected $casts = [
        'user_id' => 'integer',//unsignedInteger
        'sale_detail_id' => 'integer',//unsignedBigInteger->nullable()->default(NULL)
        'type' => 'integer',//tinyInteger
        'value' => 'float',//float(9, 2)
        'created_at' => 'datetime',//dateTime
    ];

    protected $dates = [
        'deleted_at',
        'created_at',
    ];

    /**
     * Relations
     */
    public function saleDetail()
    {
        return $this->belongsTo('App\SaleDetail');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
