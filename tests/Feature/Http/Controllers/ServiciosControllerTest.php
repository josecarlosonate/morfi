<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Servicios;

class ServiciosControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function it_stores_servicios_and_redirects()
    {

        $servicios = factory(Servicios::class)->make();
        $data = $servicios->attributesToArray();
        $response = $this->post(route('servicios.store'), $data);
        $response->assertRedirect(route('servicios.index'));
        $response->assertSessionHas('status', 'Servicios created!');
    }

    /**
     * @test
     */
    public function it_updates_servicios_and_redirects()
    {
        $servicios = factory(Servicios::class)->create();
        $data = factory(Servicios::class)->make()->attributesToArray();
        $response = $this->put(route('servicios.update', ['servicios' => $servicios]), $data);
        $response->assertRedirect(route('servicios.index'));
        $response->assertSessionHas('status', 'Servicios updated!');
    }

    /**
     * @test
     */
    public function it_destroys_servicios_and_redirects()
    {
        $servicios = factory(Servicios::class)->create();
        $response = $this->delete(route('servicios.destroy', ['servicios' => $servicios]));
        $response->assertRedirect(route('servicios.index'));
        $response->assertSessionHas('status', 'Servicios destroyed!');
    }
}
