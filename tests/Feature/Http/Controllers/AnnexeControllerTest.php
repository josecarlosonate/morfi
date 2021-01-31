<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Annexe;

class AnnexeControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function it_stores_annexe_and_redirects()
    {

        $annexe = factory(Annexe::class)->make();
        $data = $annexe->attributesToArray();
        $response = $this->post(route('annexes.store'), $data);
        $response->assertRedirect(route('annexes.index'));
        $response->assertSessionHas('status', 'Annexe created!');
    }

    /**
     * @test
     */
    public function it_updates_annexe_and_redirects()
    {
        $annexe = factory(Annexe::class)->create();
        $data = factory(Annexe::class)->make()->attributesToArray();
        $response = $this->put(route('annexes.update', ['annexe' => $annexe]), $data);
        $response->assertRedirect(route('annexes.index'));
        $response->assertSessionHas('status', 'Annexe updated!');
    }

    /**
     * @test
     */
    public function it_destroys_annexe_and_redirects()
    {
        $annexe = factory(Annexe::class)->create();
        $response = $this->delete(route('annexes.destroy', ['annexe' => $annexe]));
        $response->assertRedirect(route('annexes.index'));
        $response->assertSessionHas('status', 'Annexe destroyed!');
    }
}
