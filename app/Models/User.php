<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'usuarios';
    protected $fillable = ['ativo','nome', 'sobrenome', 'email', 'setor_id', 'privilegio', 'personal_token', 'registrado_em'];

}
