<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class Endereco extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'enderecos';
    protected $filable =[
       'rua',
       'numero',
       'bairro',
       'cidade',
       'uf',
       'ponto_referencia',
    ];

    protected $casts = [
        'created_at' => 'datetime:dd-mm-yy H:i:s',
        'updated_at' => 'datetime:dd-mm-yy H:i:s',
    ];

    public function relacionamentoEndereco(){
        return $this->hasMany(Cliente::class, 'id_cliente');
    }

}

    Schema::table('enderecos', function (Blueprint $table) {
        $table->softDeletes();
    });

    Schema::table('enderecos', function (Blueprint $table) {
        $table->dropSoftDeletes();
    });

