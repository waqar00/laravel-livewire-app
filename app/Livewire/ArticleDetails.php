<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleDetails extends Component
{
    public $article=null;

    public function mount($id)
    {
        $this->article=Article::with('category')->findOrFail($id);
    }
    public function render()
    {
        return view('livewire.article-details',[
            'article'=>$this->article
        ]);
    }
}
