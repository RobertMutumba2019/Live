<?php
namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Place;

class Division extends Component
{
    public $name;
    public $places;

    protected $rules = [
        'name' => 'required|string|max:255',
    ];

    public function mount()
    {
        $this->places = Place::all();
    }

    public function save()
    {
        $this->validate();
        Place::create(['name' => $this->name]);

        session()->flash('message', 'Location added successfully!');
        $this->reset('name');
        $this->places = Place::all(); // Refresh list
    }

    public function render()
    {
        return view('livewire.division');
    }
}
