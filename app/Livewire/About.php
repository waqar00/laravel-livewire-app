<?php

namespace App\Livewire;

use App\Models\Page;
use App\Models\Team;
use Livewire\Component;

class About extends Component
{
    public $pageId=null;
    public function mount($id)
    {
        $this->pageId=$id;
    }
    public function render()
    {
        $page=Page::find($this->pageId);
        if($page == null){
            abort(404);
        }
        $members=Team::all();
        return view('livewire.about',[
            'members'=>$members,
            'page'=>$page,
        ]);
    }
}
