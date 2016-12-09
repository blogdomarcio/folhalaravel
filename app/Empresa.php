<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table ='empresas';
	protected $fillable =['razaosocial','cnpj','endereco','telefone','email'];


	 public function funcionarios()
    {
    	return $this->hasMany('App\Funcionario');
    }
}

