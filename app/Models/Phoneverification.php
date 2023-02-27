<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phoneverification extends Model
{
    use HasFactory;

    protected $fillable = ['verify_code', 'phone_number', 'status'];


}
