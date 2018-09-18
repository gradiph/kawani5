<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    protected $fillable = [
        'name',
        'role_id',
        'store_id',
        'username',
        'password',
    ];

    protected $casts = [
        'name' => 'string',//string(50)
        'role_id' => 'integer',//unsignedInteger
        'store_id' => 'integer',//unsignedTinyInteger->nullable()->default(NULL);
        'username' => 'string',//string(30)->unique()
        'password' => 'string',//string
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = [
        'deleted_at',
    ];

    /**
     * Accessor (Getter)
     */
    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }

    public function getRoleNameAttribute($value)
    {
        return $this->role->name;
    }

    public function getStoreNameAttribute($value)
    {
        return $this->store->name;
    }

    /**
     * Mutator (Setter)
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucfirst(strtolower($value));
    }

    /**
     * Relations
     */
    public function cashierReturns()
    {
        return $this->hasMany('App\CashierReturn');
    }

    public function discounts()
    {
        return $this->hasMany('App\Discount');
    }

    public function logs()
    {
        return $this->hasMany('App\UserLog');
    }

    public function mutations()
    {
        return $this->hasMany('App/Mutation');
    }

    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function sales()
    {
        return $this->hasMany('App\Sale');
    }

    public function store()
    {
        return $this->belongsTo('App\Store');
    }
}
