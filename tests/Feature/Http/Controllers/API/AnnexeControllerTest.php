<?php

namespace Tests\Feature\Http\API\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Annexe;
use App\User;

class AnnexeControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function it_stores_annexe_api()
    {
        $annexe = factory(Annexe::class)->make();
        $data = $annexe->attributesToArray();
        $response = $this->json('POST','api/annexes',$data);
        $response->assertStatus(201)->assertJson(['created_at'=>true]);
    }

    /**
     * @test
     */
    public function it_updates_annexe_api()
    {
        $annexe = factory(Annexe::class)->create();
        $data = factory(Annexe::class)->make()->attributesToArray();
        $response = $this->json('PUT','api/annexes/'.$annexe->id,$data);
        $response->assertStatus(200)->assertJson(['updated_at'=>true]);
    }

    /**
     * @test
     */
    public function it_destroys_annexe_api()
    {
        $annexe = factory(Annexe::class)->create();
        $response = $this->json('DELETE','api/annexes/'.$annexe->id);
        $response->assertStatus(200)->assertJson(['deleted_at'=>true]);
        $annexe->refresh();
        $this->assertDatabaseMissing('annexes',['id' => $annexe->id]);

    }
}
