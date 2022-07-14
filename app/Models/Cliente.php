<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $filable =[
        name,
        cpf,
        data_nascimento,
        rg,
        email,
    ];
    
}
