<div class="edina_tm_hero" id="home">
    <div class="content">
        <div class="image">
            <div class="main" data-img-url="{{asset("$personalinfo->img")}}" style="background-image: url(&quot;{{asset("$personalinfo->img")}}&quot;);"></div>
        </div>
        <div class="extra">
            <h3 class="name">{{$personalinfo->name}}</h3>
            <p class="text">{{$personalinfo->short_bio}}</p>
            <div class="social">
                <ul>
                    @foreach ($links as $link)
                    <li><a target="_blank" href="{{$link->url}}"><i class="  {{$link->icon}} fa-2x" style="color: #000"  alt=""></i></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
