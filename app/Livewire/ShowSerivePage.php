<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Services;

class ShowSerivePage extends Component
{
    public function render()
    {
        $services = Services::all();
        return view('livewire.show-serive-page',['services'=>$services]);
    }
}
