<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Locate;
use App\Models\city;

class Kisasi extends Component
{


public $locates;
public $cities;

public $locate;
public $City;

public function mount()
{
    $this->locates = Locate::all();
    $this->cities = city::all();
}

}
