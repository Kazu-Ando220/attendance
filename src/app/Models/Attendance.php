<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'operation_user_id',
        'date'
    ];

    public function operation_user()
    {
        return $this->belongsTo(Operation_user::class);
    }
}