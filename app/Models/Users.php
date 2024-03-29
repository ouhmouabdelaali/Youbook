<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $primarykey ='id';
    protected $fillable =['username','password','first_name','last_name','email','phone_number','role'];
}
