<?php

namespace App\Livewire;

use App\Models\Services;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $services = Services::all();
        return view('livewire.home', [
            'services' => $services
        ]);
    }
}
