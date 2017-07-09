<ul class="side-nav metismenu" id="menu">
    @foreach(config('menu.sidebar') as $menu)
        <li class="{{set_active($menu['active'],'active')}}">
            <a href="{{url($menu['link'])}}"><i class="{{$menu['icon']}}"></i> {{$menu['title']}} @if(isset($menu['children'])) <span class="fa arrow fa-fw"></span> @endif</a>
            @if(isset($menu['children']))
                <ul aria-expanded="true" class="collapse">
                    @foreach($menu['children'] as $child)
                        <li class="{{set_active($child['active'],'active')}}">
                            <a href="{{url($child['link'])}}">{{$child['title']}}@if(isset($child['subchildren'])) <span class="fa arrow fa-fw"></span> @endif</a>
                            @if(isset($child['subchildren']))
                                <ul aria-expanded="true" class="collapse submenu">
                                    @foreach($child['subchildren'] as $subchild)
                                        <li class="{{set_active($subchild['active'])}}"><a href="{{url($subchild['link'])}}">{{$subchild['title']}}</a></li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
                </ul>
            @endif
        </li>
    @endforeach
</ul>