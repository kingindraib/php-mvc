<header>
    <div class="header">
        <div class="logo">
            <img src="{{url(_site_settings('logo'))}}">
            {{-- <img src="{{url('public/home/images/logo.png')}}"> --}}
        </div>
        <div class="menu">
            <div class="mobile_menu" style="display: none;">
                <i class="fa fa-bars"></i>
            </div>
            <div class="mobile_menue_items" style="display: none;">
                <ul>
                    <ul>
                        <li><a href="{{ url('') }}">Home </a></li>
                        <li><a href="#">Movie </a></li>
                        @foreach (getCategory() as $item)
                        @if($item['status']=='publish' && $item['is_nav']==1)
                        <li><a href="#">{{$item['category_name']}} </a></li>
                        @endif
                        @endforeach
                        <li><a href="#">login</a></li>
                    </ul>
                    
                </ul>
            </div>
            <nav>
                <ul>
                    <li><a href="{{ url('') }}">Home </a></li>
                    <li><a href="#">Movie </a></li>
                    @foreach (getCategory() as $item)
                    @if($item['status']=='publish' && $item['is_nav']==1)
                    <li><a href="{{ url('archive-page/'.$item['id']) }}">{{$item['category_name']}} </a></li>
                    @endif
                    @endforeach
                    @if(Auth())
                    <li><a href="{{ url('user/dashboard') }}">My Account</a></li>
                    @else
                    <li><a href="{{ url('login') }}"><img src="{{url('public/home/images/user.png')}}" alt=""></a></li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
</header>