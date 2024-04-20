<?php

namespace App\MyOwn\Enums;

enum Person:string {
    case N = 'Natural';
    case J = 'Jurídica';
    case A = 'Apoderado';
    case NA = 'Niños o adolescentes';
}