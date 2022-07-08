<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'usuarios';
    protected $fillable = ['nome', 'sobrenome', 'email', 'setor_id', 'privilegio', 'personal_token'];
}
