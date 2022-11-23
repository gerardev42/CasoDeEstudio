<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Compañia;
use App\Models\avion;
use App\Models\aeropuerto;
use App\Models\vuelo;



class vueloTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
       $compañia= new Compañia();
        $compañia->nombre="Qatar Airways";
       
        $avion= new avion();
        $avion->id_compañia=1;

       $aeropuerto= new aeropuerto();
       $aeropuerto->nombre="Santa Maria";
       $vuelo= new vuelo();
        $vuelo->id_avion=1;
        $vuelo->id_aeropuertoSalida=1;
        $vuelo->id_aeropuertoLlegada=2;

        $this->assertEquals(1, $vuelo->id_avion);

        
    


    }
}
