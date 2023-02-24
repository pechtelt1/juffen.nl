<?php

namespace Tests\Feature;

use App\Http\Livewire\CompanyComponent;
use Livewire\Livewire;
use Tests\TestCase;

class CreateCompany extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function it_can_create_a_company()
    {
        $component = Livewire::test(CompanyComponent::class);

        $component->set('name', 'Acme');
        $component->set('city', 'Montfoort');

        $component->call('create');

        $this->assertDatabaseHas('companies', ['name' => 'Acme', 'city' => 'Montfoort']);

    }
}
