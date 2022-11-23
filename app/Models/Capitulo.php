<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capitulo extends Model
{
    use HasFactory;


    public Capitulo $capitulo;

    public function __construct (Capitulo $capitulos) {
        $this->capitulo = $capitulos;
    }

}
