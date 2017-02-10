<ul class="side-nav metismenu" id="menu">
    @foreach(config('menu.sidebar') as $menu)
        <li class="{{set_active($menu['active'],'active')}}">
            <a href="{{url($menu['link'])}}"><i class="{{$menu['icon']}}"></i> {{$menu['title']}} @if(isset($menu['children'])) <span class="fa arrow fa-fw"></span> @endif</a>
            @if(isset($menu['children']))
                <ul aria-expanded="true" class="collapse">
                    @foreach($menu['children'] as $child)
                        <li class="{{set_active($child['active'])}}"><a href="{{url($child['link'])}}">{{$child['title']}}</a></li>
                    @endforeach
                </ul>
            @endif
        </li>
    @endforeach
</ul>