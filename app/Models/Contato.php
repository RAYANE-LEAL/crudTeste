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
    // use SoftDeletes;

    protected $table = 'contatos';
    protected $filable =[
       ddd,
       numero,
    ];

    protected $casts = [
        'created_at' => 'datetime:d-m-Y H:i:s',
        'updated_at' => 'datetime:d-m-Y H:i:s',
    ];

}
 
    // Schema::table('contatos', function (Blueprint $table) {
    //     $table->softDeletes();
    // });

    // Schema::table('contatos', function (Blueprint $table) {
    //     $table->dropSoftDeletes();
    // });

