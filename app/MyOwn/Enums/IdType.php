<?php
namespace App\MyOwn\Enums;
enum IdType:string {
    case CC = 'Cédula de ciudadanía';
    case TI = 'Tarjeta de identidad';
    case CE = 'Cédula extranjera';
    case NIT = 'NIT';
}