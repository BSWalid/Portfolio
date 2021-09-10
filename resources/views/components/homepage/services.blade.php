
            <div class="edina_tm_services" id="service">
                <div class="container">
                    <div class="edina_tm_title">
                        <h3>What I Do</h3>
                        <p>I provide the most wonderful services related to web development</p>
                    </div>
                    <div class="service_list">
                        <ul>

                            @foreach ($services as $service)

                                <li class="wow fadeInLeft" data-wow-duration="1s" style="visibility: hidden; animation-duration: 1s; animation-name: none;">
                                    <div class="list_inner">
                                        <img class="svg custom" src="{{asset("$service->icon")}}" alt="">
                                        <div class="service_title"><h3>{{$service->name}}</h3></div>
                                        <a class="learn_more" href="#">Learn More<span></span></a>
                                        <a class="edina_tm_full_link" href="#"></a>
                                        <div class="popup_informations">
                                           {!! $service->description !!}
                                        </div>
                                    </div>
                                </li>

                            @endforeach


                        </ul>
                    </div>
                </div>
            </div>
