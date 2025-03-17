<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MinecraftUser extends Model
{
    use HasFactory;

    protected $table = 'minecraftusers';

    protected $fillable = ['username', 'userType', 'uuid'];
}
