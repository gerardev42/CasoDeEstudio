<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oracion extends Model
{
    use HasFactory;

    public $Palabras = [];

    public function AgregarPalabras(string $Palabra) {
        $this->Palabras[] = $Palabra;
    }

}
