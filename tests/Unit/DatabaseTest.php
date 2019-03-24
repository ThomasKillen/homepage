<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DatabaseTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testProductPension()
    {
        $this->assertDatabaseHas('products', [
            'name' => 'pensions'
        ]);

    }

    public function testProductCredit()
    {
        $this->assertDatabaseHas('products', [
            'name' => 'credit'
        ]);

    }

    public function testProductSavings()
    {
        $this->assertDatabaseHas('products', [
            'name' => 'savings'
        ]);

    }

    public function testProductInsurance()
    {
        $this->assertDatabaseHas('products', [
            'name' => 'insurance'
        ]);

    }
}
