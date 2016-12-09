<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $table ='funcionarios';
	protected $fillable =['nome','empresa_id'];
	
    public function empresa()
    {
    	return $this->belongsTo('App\Empresa');
    }

     public function folha()
    {
    	return $this->hasMany('App\Folha');
    }

}
