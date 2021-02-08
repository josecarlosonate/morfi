<?php

namespace Tests\Feature\Http\API\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Servicios;
use App\User;

class ServiciosControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function it_stores_servicios_api()
    {
        $servicios = factory(Servicios::class)->make();
        $data = $servicios->attributesToArray();
        $response = $this->json('POST','api/servicios',$data);
        $response->assertStatus(201)->assertJson(['created_at'=>true]);
    }

    /**
     * @test
     */
    public function it_updates_servicios_api()
    {
        $servicios = factory(Servicios::class)->create();
        $data = factory(Servicios::class)->make()->attributesToArray();
        $response = $this->json('PUT','api/servicios/'.$servicios->id,$data);
        $response->assertStatus(200)->assertJson(['updated_at'=>true]);
    }

    /**
     * @test
     */
    public function it_destroys_servicios_api()
    {
        $servicios = factory(Servicios::class)->create();
        $response = $this->json('DELETE','api/servicios/'.$servicios->id);
        $response->assertStatus(200)->assertJson(['deleted_at'=>true]);
        $servicios->refresh();
        $this->assertDatabaseMissing('servicios',['id' => $servicios->id]);

    }
}
