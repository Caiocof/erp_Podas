<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registerUser extends Model
{
    use HasFactory;

    protected $table = 'tlogin';
    protected $fillable = ['tlogin_nome', 'tlogin_nome_completo', 'tlogin_pass'];
}
