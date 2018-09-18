<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use SoftDeletes;

    public $timestamps = FALSE;

    protected $fillable = [
        'name',
    ];

    protected $casts = [
        'name' => 'string',//string(50)
    ];

    protected $dates = [
        'deleted_at'
    ];

    /**
     * Relations
     */
    public function sales()
    {
        return $this->belongsToMany('App\Sale')->using('App\PaymentSale')->withPivot('value');
    }
}
