<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $filable =[
        cliente_id,
        name,
        cpf,
        data_nascimento,
        rg,
        email,
    ];
    
}
