<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable('name', 'email', 'password', 'role', 'status', 'profile_photo_path')]
class Admin extends Model
{
    use HasFactory;
}