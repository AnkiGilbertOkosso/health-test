<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'exercise_name', 'calories_burned', 'performed_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
