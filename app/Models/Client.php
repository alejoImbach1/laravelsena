<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'type_person',
        'first_name',
        'middle_name',
        'first_surname',
        'second_surname',
        'id_type',
        'id_number',
        'birthday',
        'gender',
        'address',
        'email'
    ];
}
