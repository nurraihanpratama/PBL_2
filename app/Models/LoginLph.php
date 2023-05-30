<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginLph extends Model
{
    use HasFactory;

    protected $table = 'login_lphs';
    protected $primary_key = 'id';

    protected $fillable = ['name', 'username', 'password', 'no_telp', 'address', 'email'];

    protected $hidden = ['password'];
}
