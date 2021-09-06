<div class="edina_tm_hero" id="home">
    <div class="content">
        <div class="image">
            <div class="main" data-img-url="{{asset('images/homepage/hero/2.jpg')}}" style="background-image: url(&quot;img/hero/2.jpg&quot;);"></div>
        </div>
        <div class="extra">
            <h3 class="name">{{$personalinfo->name}}</h3>
            <p class="text">{{$personalinfo->short_bio}}</p>
            <div class="social">
                <ul>
                    @foreach ($links as $link)
                    <li><a href="{{$link->url}}"><img class="svg custom" src="{{asset('images/homepage/svg/social/fb.svg')}}" alt=""></a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
