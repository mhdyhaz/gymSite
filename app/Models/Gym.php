<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Gym extends Model
{
    use HasFactory;

    protected static function booted()
{
    static::creating(function ($gym) {
        $gym->slug = Str::slug($gym->name);
    });
}
}
