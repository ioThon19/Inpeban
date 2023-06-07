<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'tb_user';
    protected $primarykey = 'user_id';

    protected $fillable = ['email', 'username', 'password'];
}
