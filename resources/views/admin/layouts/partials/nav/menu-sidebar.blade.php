<ul class="side-nav">
    @foreach(config('menu.sidebar') as $menu)
        <li class="{{set_active($menu['active'],'active open')}} @if(isset($menu['children'])) has-child @endif">
            <a href="{{$menu['link']}}"><i class="{{$menu['icon']}}"></i> {{$menu['title']}}</a>
            @if(isset($menu['children']))
                <ul class="sub-menu collapse">
                    @foreach($menu['children'] as $child)
                        <li class="{{set_active($child['active'])}}"><a href="{{$child['link']}}">{{$child['title']}}</a></li>
                    @endforeach
                </ul>
            @endif
        </li>
    @endforeach
</ul>