<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Store extends Model
{
    use SoftDeletes;

    public $timestamps = FALSE;

    protected $fillable = [
        'type',
        'name',
        'address',
        'phone',
    ];

    protected $casts = [
        'type' => 'string',//enum['Kawani', 'Consina', 'Rei', 'Gudang'])->default('Kawani')
        'name' => 'string',//string(50)
        'address' => 'string',//string(100)->nullable()->default(NULL)
        'phone' => 'string',//string(20)->nullable()->default(NULL)
    ];

    protected $dates = [
        'deleted_at',
    ];

    /**
     * Relations
     */
    public function receiveMutation()
    {
        return $this->hasMany('App\Mutation', 'to');
    }

    public function sales()
    {
        return $this->hasMany('App\Sale');
    }

    public function sendMutation()
    {
        return $this->hasMany('App\Mutation', 'from');
    }

    public function stockOpnames()
    {
        return $this->hasMany('App\StockOpname');
    }

    public function stocks()
    {
        return $this->hasMany('App\Stock');
    }

    public function users()
    {
        return $this->hasMany('App\User');
    }

    public function visitors()
    {
        return $this->hasMany('App\Visitor');
    }
}
