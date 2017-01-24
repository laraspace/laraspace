<ul class="header-nav">
    @foreach(config('menu.horizontal') as $menu)
        <li class="{{set_active($menu['active'],'active')}}  @if(isset($menu['children'])) has-child @endif">
            <a href="{{$menu['link']}}" @if(isset($menu['children'])) data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" @endif><i class="{{$menu['icon']}}"></i> {{$menu['title']}}</a>
            @if(isset($menu['children']))
                <div class="dropdown-menu">
                    @foreach($menu['children'] as $child)
                        <a class="dropdown-item" href="{{$child['link']}}">{{$child['title']}}</a>
                    @endforeach
                </div>
            @endif
        </li>
    @endforeach
</ul>