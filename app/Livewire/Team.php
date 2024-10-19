<?php

namespace App\Livewire;

use App\Models\Team as ModelsTeam;
use Livewire\Component;

class Team extends Component
{
    public function render()
    {
        $members=ModelsTeam::all();
        return view('livewire.team',[
            'members'=>$members
        ]);
    }
}
