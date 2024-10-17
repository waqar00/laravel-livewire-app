<?php

namespace App\Livewire;

use App\Models\Services;
use Livewire\Component;

class ShowSerive extends Component
{
    public $service;

    public function mount($id)
    {
        $this->service = Services::findOrFail($id);
    }
    public function render()
    {
        return view('livewire.show-serive', [
            'service' => $this->service
        ]);
    }
}
