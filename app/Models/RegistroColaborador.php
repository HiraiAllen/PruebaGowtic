<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistroColaborador extends Model
{
    use HasFactory;

    protected $table = "registros_colaboradores";
    protected $fillable = ['codigo_colaborador'];

    protected $casts = [
        'created_at' => 'datetime:Y/d/m H:i',
        'updated_at' => 'datetime:Y/d/m H:i',
    ];
}
