<div class="card bg-transparent border-0 text-center">
    <div class="card-img">
        @if ($member->image)
        <img loading="lazy" decoding="async" src="{{asset('storage/'.$member->image)}}" alt="Scarlet Pena" class="rounded w-100" width="300" height="332">
        @endif
        @if ($member->fb_url || $member->twitter_url || $member->insta_url)
        <ul class="card-social list-inline">
            <li class="list-inline-item"><a target="_blank" class="facebook" href="{{ $member->fb_url}}"><i class="fab fa-facebook"></i></a>
            </li>
            <li class="list-inline-item"><a target="_blank" class="twitter" href="{{ $member->twitter_url}}"><i class="fab fa-twitter"></i></a>
            </li>
            <li class="list-inline-item"><a target="_blank" class="instagram" href="{{ $member->insta_url}}"><i class="fab fa-instagram"></i></a>
            </li>
        </ul>
        @endif
    </div>
    <div class="card-body">
        <h3>{{$member->name}}</h3>
        <p>{{$member->designation}}</p>
    </div>
</div>
