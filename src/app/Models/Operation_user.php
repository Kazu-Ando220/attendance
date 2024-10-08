<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operation_user extends Model
{
    use HasFactory;

    protected $fillable = ['name','email','password'];
}