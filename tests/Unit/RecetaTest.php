<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Receta;

class RecetaTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $Receta = new Receta();

        $Receta->Title = "Pizza";
        $Receta->Serving = 2;
        $Receta->Instruction = "Ninguna";
        $Receta->save();

        $this->assertEquals("Pizza", $Receta->Title);

    }
}
