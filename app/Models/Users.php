<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    public $table = "user";
    protected $fillable = [
        'category',
        'email',
        'firstname',
        'password',
    ];
}
