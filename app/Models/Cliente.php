<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class Cliente extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'clientes';
    protected  $fillable =[
        name,
        cpf,
        data_nascimento,
        rg,
        email,
        
    ];

    protected $casts = [
        'created_at' => 'datetime:dd-mm-yy H:i:s',
        'updated_at' => 'datetime:dd-mm-yy H:i:s',
    ];
    
}

    Schema::table('clientes', function (Blueprint $table) {
        $table->softDeletes();
    });
    
    Schema::table('clientes', function (Blueprint $table) {
        $table->dropSoftDeletes();
    });

