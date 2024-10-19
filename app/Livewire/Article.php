<?php

namespace App\Livewire;

use App\Models\Article as ModelsArticle;
use App\Models\Category;
use Livewire\Attributes\Url;
use Livewire\Component;

class Article extends Component
{
    #[Url]
    public $categorySlug = null;


    public function render()
    {
        $categories = Category::all();
        if (!empty($this->categorySlug)) {
            $caregory = Category::where('slug', $this->categorySlug)->first();
            if(empty($caregory)){
                abort(404);
            }
            $articles = ModelsArticle::orderBy('created_at', 'DESC')
                ->where('category_id', $caregory->id)
                ->where('status',true)
                ->paginate(10);
        } else {
            $articles = ModelsArticle::orderBy('created_at', 'DESC')->where('status',true)->paginate(10);
        }
        $latestArticles = ModelsArticle::latest()->where('status',true)->paginate(3);

        return view('livewire.article', [
            'articles' => $articles,
            'categories' => $categories,
            'latestArticles' => $latestArticles,
        ]);
    }
}
