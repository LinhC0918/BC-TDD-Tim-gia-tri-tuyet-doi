<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\AbsoluteNumberController;

class AbsoluteNumber extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCalculator()
    {
        $result = new AbsoluteNumberController();
        $this->assertEquals(0, $result->absolute(0));
        $this->assertEquals(1, $result->absolute(1));
        $this->assertEquals(1, $result->absolute(-1));

    }
}
