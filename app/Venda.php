<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $table = 'vendas';
    protected $primaryKey = 'id';
  
    function produtos(){
        return $this->belongsToMany('App\Produto');
    }

    function cliente(){
    	return $this->belongsTo('App\Cliente', 'id_cliente', 'id');
    }
    
}
