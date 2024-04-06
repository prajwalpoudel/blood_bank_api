<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Model;


class RegUser extends Model
{
    use HasFactory;
    protected $table = 'reg_users';
    protected $primaryKey = 'id';






    protected $fillable = [
        'username', // Add this line
        'email',
        'password',
    ];







}
