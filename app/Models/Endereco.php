<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class Endereco extends Model
{
    use HasFactory;
  

    protected $table = 'enderecos';
    protected $primaryKey = "endereco_id";
    protected $filable =[
       'rua',
       'numero',
       'bairro',
       'cidade',
       'uf',
       'ponto_referencia',
    ];

    protected $casts = [
        'created_at' => 'datetime:d-m-Y H:i:s',
        'updated_at' => 'datetime:d-m-Y H:i:s',
    ];

    public function relacionamentoEndereco(){
        return $this->hasMany(Cliente::class, 'id_cliente');
    }

}


