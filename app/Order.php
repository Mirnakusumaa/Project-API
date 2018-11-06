<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'id_order';
    protected $guarded = [];
    public $timestamps = false;
    public $incrementing = false;
    

    public function detail_order(){
        return $this->belongsTo('App\DetailOrder');
    }
    
    public function user(){
    	return $this->hasMany('App\User');
    }
}
