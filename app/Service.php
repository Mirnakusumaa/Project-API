<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    protected $primaryKey = 'id_service';
    protected $guarded = [];
    public $timestamps = false;
    public $incrementing = false;
    

    public function detail_order(){
        return $this->belongsTo('App\DetailOrder');
    }

    
}
