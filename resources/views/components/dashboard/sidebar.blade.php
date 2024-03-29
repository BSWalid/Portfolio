 <!-- sidebar left start-->
 <div class="sidebar-left">
    <div class="sidebar-left-info">

        <div class="user-box">
            <div class="d-flex justify-content-center">
                <img src="{{asset("$personalinfo->img")}}" alt="" class="img-fluid rounded-circle">
            </div>
            <div class="text-center text-white mt-2">
                <h6>{{$personalinfo->name}}</h6>
                <p class="text-muted m-0">{{$personalinfo->short_bio}}</p>
            </div>
        </div>

        <!--sidebar nav start-->

        <ul class="side-navigation">


            <li>
                <h3 class="navigation-title">Service</h3>
            </li>
            <li class="active">
                <a href="{{route('dashboard')}}"><i class="fas fa-home fa-2x"></i><span>{{__('Dashboard')}}</span></a>
            </li>
            <li class="menu-list"><a href=""><i class="fas fa-home fa-2x"></i> <span>{{__('Service')}}</span> <i style="margin-left:5px" class="fas fa-sort-down"></i></a>
                <ul class="child-list">
                    <li><a href="{{route('service.index')}}">{{__('My Services')}}</a></li>

                </ul>
            </li>

            <li class="menu-list"><a href=""><i class="fas fa-passport fa-2x"></i> <span>{{__('Project')}}</span> <i style="margin-left:5px" class="fas fa-sort-down"></i></a>
                <ul class="child-list">
                    <li><a href="{{route('project.index')}}">{{__('My Projects')}}</a></li>

                </ul>
            </li>

            <li class="menu-list"><a href=""><i class="fas fa-info fa-2x"></i> <span>{{__('Information')}}</span> <i style="margin-left:5px" class="fas fa-sort-down"></i></a>
                <ul class="child-list">
                    <li><a href="{{route('personalinfo.index')}}">{{__('Bio')}}</a></li>
                    <li><a href="{{route('links.index')}}">{{__('Links')}}</a></li>
                    <li><a href="{{route('technologies.index')}}">{{__('Technologoies')}}</a></li>

                </ul>
            </li>

        </ul><!--sidebar nav end-->
    </div>
</div><!-- sidebar left end-->
