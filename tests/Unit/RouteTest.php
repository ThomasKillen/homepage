<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RouteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHome()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testProductPension()
    {
        $response = $this->get('/pensions');

        $response->assertStatus(200);
    }

    public function testProductSavings()
    {
        $response = $this->get('/savings');

        $response->assertStatus(200);
    }

    public function testProductCredit()
    {
        $response = $this->get('/credit');

        $response->assertStatus(200);
    }

    // Expected:
    public function testProductInsurance()
    {
        $response = $this->get('/insurance');

        $response->assertStatus(200);
    }

    // Expected: return homepage with no parameter.
    public function testWildCard()
    {
        $response = $this->get('/hack');

        $response->assertLocation('/');
    }

}
