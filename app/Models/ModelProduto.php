<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelProduto extends Model
{
	protected $table = 'produtos';

	protected $fillable = ['nome', 'id_user', 'quantidade','preco', 'categoria'];

    public function relUsers(){
    	return $this->hasOne('App\User', 'id', 'id_user');
    }
}
