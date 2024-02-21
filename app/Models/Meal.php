<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    use HasFactory;

    protected $fillable = ['diary_id', 'type', 'name', 'calories'];

    public function diary()
    {
        return $this->belongsTo(Diary::class);
    }
}
