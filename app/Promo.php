<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Promo extends Model
{
    use SoftDeletes;

    public $timestamps = FALSE;

    protected $fillable = [
        'code',
        'name',
        'started_at',
        'ended_at',
    ];

    protected $casts = [
        'code' => 'string',//string(16)->nullable->default(NULL)
        'name' => 'string',//string(50)
        'started_at' => 'datetime',//dateTime
        'ended_at' => 'datetime',//dateTime
    ];

    protected $dates = [
        'started_at',
        'ended_at',
        'deleted_at',
    ];

    /**
     * Relations
     */
    public function requirements()
    {
        return $this->belongsToMany('App\Stock', 'promo_requirement')->using('App\PromoRequirement')->withPivot('type', 'value', 'qty');
    }

    public function saleDetails()
    {
        return $this->hasMany('App\SaleDetail');
    }

    public function stocks()
    {
        return $this->belongsToMany('App\Stock')->using('App\PromoStock')->withPivot('type', 'value', 'qty');
    }
}
