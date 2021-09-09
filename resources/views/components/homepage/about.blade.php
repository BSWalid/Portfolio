<div class="edina_tm_about" id="about">
    <div class="container">
        <div class="about_title">
            <h3>About Me</h3>
        </div>
        <div class="content">
            <div class="leftpart wow fadeInLeft" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInLeft;">
                <div class="info">
                        {!! $personalinfo->about_me !!}
                </div>
                <div class="my_skills">
                    <h3 class="title">What are the technologies i use?</h3>
                    <p class="desc">this is set of technologies i use in my work</p>
                    <div class="wrapper">
                        <div class="left">
                            <div class="dodo_progress">

                                @foreach ($technologies as $key=>$technology)
                                    @if ($key%2==0)
                                        <div class="progress_inner" data-value="95">
                                            <span class="label opened">React.Js</span>
                                        </div>

                                    @endif
                                @endforeach

                            </div>
                        </div>


                        <div class="right">
                            <div class="dodo_progress">

                                @foreach ($technologies as $key=>$technology)
                                    @if ($key%2!=0)
                                        <div class="progress_inner" data-value="95">
                                            <span class="label opened"></span>
                                        </div>

                                    @endif
                                @endforeach

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="rightpart wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInLeft;">
                <div class="image">
                    <img src="{{asset('images/homepage/thumbs/26-35.jpg')}}" alt="">
                    <div class="main" data-img-url="{{asset('images/homepage/about/2.jpg')}}" style="background-image: url('{{asset('images/homepage/about/2.jpg')}}');"></div>
                    <div class="experience" data-wow-duration="1.2s">
                        <div class="info">
                            <h3>6+ Years</h3>
                            <span>Of Experiance</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
