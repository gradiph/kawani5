<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mutation extends Model
{
    public $timestamps = FALSE;

    protected $fillable = [
        'user_id',
        'from',
        'to',
        'date',
    ];

    protected $casts = [
        'user_id' => 'integer',//unsignedInteger
        'from' => 'integer',//unsignedTinyInteger
        'to' => 'integer',//unsignedTinyInteger
        'date' => 'date',//date
    ];

    protected $dates = [
        'date',
    ];

    /**
     * Relations
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function from()
    {
        return $this->belongsTo('App\Store', 'from');
    }

    public function stocks()
    {
        return $this->belongsToMany('App\Stock')->using('App\MutationStock')->withPivot('qty', 'packed_at', 'picked_at', 'delivered_at');
    }

    public function to()
    {
        return $this->belongsTo('App\Store', 'to');
    }
}
