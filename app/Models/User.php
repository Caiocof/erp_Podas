<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'tlogin';

    protected $fillable = ['tlogin_nome', 'tlogin_nome_completo', 'tlogin_pass',];

    protected $hidden = ['tlogin_pass',];

    protected $primaryKey = 'tlogin_id_pk';
}
