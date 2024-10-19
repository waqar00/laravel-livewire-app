<ul class="list-unstyled widget-list">
    <li class="d-flex widget-post align-items-center">
        <a wire:navigate class="text-black" href="{{route('articleDetails',$latestArticle->id)}}">
            <div class="widget-post-image flex-shrink-0 me-3">
                <img class="rounded" loading="lazy" decoding="async" src="{{'storage/'.$latestArticle->image}}" alt="Post Thumbnail">
            </div>
        </a>
        <div class="flex-grow-1">
            <h5 class="h6 mb-0"><a wire:navigate class="text-black" href="{{ route('articleDetails',$latestArticle->id)}}">{{$latestArticle->title}}</a></h5>
            <small>{{$latestArticle->created_at}}</small>
        </div>
    </li>
</ul>
