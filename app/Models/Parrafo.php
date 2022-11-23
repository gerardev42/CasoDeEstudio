<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parrafo extends Model
{
    use HasFactory;

    public Parrafo $parrafo;

    public function __construct(Parrafo $Parrafos) {
        $this->parrafo = $Parrafos;
    }


}
