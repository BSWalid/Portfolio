<div class="edina_tm_news" id="portfolio">
    <div class="container">
        <div class="edina_tm_title">
            <h3>Portfolio </h3>
            <p>these are some of the projects i've made</p>
        </div>
        <div class="news_inner wow fadeInLeft" data-wow-duration="1s">
            <div class="my_carousel">
                <ul class="owl-carousel">
                    @foreach ($projects as $project)
                    <li>
                        <div class="list_inner">

                            <div class="image">
                            <img src="{{asset("$project->img")}}" alt="" />

                                <a class="edina_tm_full_link" href="#"></a>
                            </div>
                            <div class="news_details">
                                <h3 class="title"><a href="#">{{ $project->title }}</a></h3>
                            </div>
                            <div class="main_content">
                                <div class="descriptions">
                                    {!! $project->description !!}
                                </div>
                            </div>
                        </div>
                    </li>

                    @endforeach

                </ul>
                <a class="prev_button" href="#"><span></span></a>
                <a class="next_button" href="#"><span></span></a>
            </div>
        </div>
    </div>
</div>
