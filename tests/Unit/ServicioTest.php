<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use App\Models\Servicio;

class ServicioTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_basicrequest_create(): void
    {
        $response = $this->get('servicio/create');
        $response->assertStatus(200);
    }
    public function test_basicrequest_store(): void
    {
        $response = $this->post('servicio/store');
        $response->assertStatus(302);
    }
    /* public function test_basicrequest_edit(): void
    {
        $response = $this->get('servicio/edit');
        $response->assertStatus(404);
    }
    public function test_basicrequest_update(): void
    {
        $response = $this->get('servicio/update');
        $response->assertStatus(404);
    } */
    /* public function test_servicio_store(): void
    {
        $servicio = Servicio::create([
            'nombreservicio' => 'Inflar llantas',
            'descripcionservicio' => 'Costoso'
        ]);
    
        $this->assertEquals('Inflar llantas', $servicio->nombreservicio);
    } */

    /* public function test_servicio_update(): void
    {
        $servicio = Servicio::find(20);
        $servicio->nombreservicio = 'DESINFLAR LLANTAS';
        $servicio->update();
    
        $this->assertEquals('DESINFLAR LLANTAS', $servicio->nombreservicio);
    } */
}
