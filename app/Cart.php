<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    protected $fillable = ['user_id', 'pizzas_id', 'qty'];

    public function pizzas(){
        return $this->belongsTo('App\Pizza');
    }
}
