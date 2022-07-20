<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class Cliente extends Model
{
    use HasFactory;


    protected $table = 'clientes';
    protected $primaryKey = "cliente_id";
    protected  $fillable =[
        name,
        cpf,
        data_nascimento,
        rg,
        email,   
        cliente_id,
    ];


    protected $casts = [
        'created_at' => 'datetime:d-m-Y H:i:s',
        'updated_at' => 'datetime:d-m-Y H:i:s',
        'data_nascimento' => 'datetime:d-m-Y',
    ];

    protected $appends = [
        'primeiro_nome'
    ];

     protected function setPrimeiroNomeAttribute(){
        $nome = $this->name;
        $primeiroNome = explode("", $nome);

        $primeiroNome = $primeiroNome[0];
        $this->primeiro_nome = $primeiroNome; 
     }

    public function endereco(){
        return $this->hasMany(Cliente::class, 'cliente_id', 'cliente_id');
    }

    public function contato(){
        return $this->oneMany(Cliente::class, 'cliente_id', 'cliente_id');
    }
    
}

