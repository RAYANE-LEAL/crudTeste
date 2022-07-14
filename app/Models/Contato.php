<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Contato extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'contatos';
    protected $filable =[
       ddd,
       numero,
       numero_contato,
    ];

    protected $casts = [
        'created_at' => 'datetime:dd-mm-yy H:i:s',
        'updated_at' => 'datetime:dd-mm-yy H:i:s',
    ];

    public function relacionamentoCli(){
        return $this->hasMany(Cliente::class, 'id_cliente');
    
    }

}
 
    Schema::table('contatos', function (Blueprint $table) {
        $table->softDeletes();
    });

    Schema::table('contatos', function (Blueprint $table) {
        $table->dropSoftDeletes();
    });

