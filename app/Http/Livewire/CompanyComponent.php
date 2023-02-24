<?php

namespace App\Http\Livewire;

use App\Models\Company;
use Livewire\Component;

class CompanyComponent extends Component
{
    public $name;
    public $city;

    public function render()
    {
        return view('livewire.homeupload-component');
    }

    public function create(){
        Company::create([
           'name' => $this->name,
           'city' => $this->city,
        ]);
    }
}
