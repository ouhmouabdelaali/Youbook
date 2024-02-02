<?php

namespace App\Models;

use Books as GlobalBooks;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;
    protected $table = 'books';
    protected $primarykey ='id';
    protected $fillable =['title','author','description','available'];

}
