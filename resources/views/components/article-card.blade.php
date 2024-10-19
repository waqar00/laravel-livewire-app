<div class="col-md-6" data-aos="fade">
    <article class="blog-post">
        <div class="post-slider slider-sm rounded">
            <img loading="lazy" decoding="async" src="{{'storage/'.$article->image}}" alt="Post Thumbnail">

        </div>
        <div class="pt-4">
            <p class="mb-3">{{$article->created_at}}</p>
            <h2 class="h4"><a class="text-black" href="{{ route('articleDetails',$article->id)}}">{{$article->title}}</a></h2>
            <p>{!! Illuminate\Support\Str::limit($article->content, 50) !!}</p>
            <a wire:navigate href="{{ route('articleDetails',$article->id)}}" class="text-primary fw-bold" aria-label="Read the full article by clicking here">Read More</a>
        </div>
    </article>
</div>
