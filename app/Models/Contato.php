<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Contato extends Model
{
    use HasFactory;
  

    protected $table = 'contatos';
    protected $primaryKey = "contato_id";
    protected $filable =[
       'ddd',
       'numero',
       'cliente_id'
    ];

    protected $appends = [
        'numero_contato'
    ];

     protected function getNumeroContatoAttribute(){           
        $contato = $this->ddd . $this->numero; 
        $telefone = $contato;

        $telefone = $telefone[0];
        $this->numero_contato = $telefone;
        
    }

    protected $casts = [
        'created_at' => 'datetime:d-m-Y H:i:s',
        'updated_at' => 'datetime:d-m-Y H:i:s',
    ];   
}


