<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    // Set the table name
    protected $table = 'users';

    // Specify the fillable attributes
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'gender',
        'address',
    ];
}