<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailOrder extends Model
{
    protected $table = 'detail_orders';
    protected $guarded = [];
    public $timestamps = false;
    public $incrementing = false;
    

    public function order(){
        return $this->belongsTo('App\Order');
    }
    
    public function service(){
        return $this->belongsTo('App\Service');
    }
    
}
