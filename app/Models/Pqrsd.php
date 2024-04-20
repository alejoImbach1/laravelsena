<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pqrsd extends Model
{
    use HasFactory;
    protected $fillable = [
        'is_anonymous',
        'type_pqrsd',
        'description'
    ];
}
