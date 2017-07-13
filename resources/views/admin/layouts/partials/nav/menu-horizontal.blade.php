<ul class="header-nav">
    @foreach(config('menu.horizontal') as $menu)
        <li class="{{set_active($menu['active'],'active')}}  @if(isset($menu['children'])) has-child @endif">
            <a href="{{url($menu['link'])}}" @if(isset($menu['children'])) data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" @endif><i class="{{$menu['icon']}}"></i> {{$menu['title']}}</a>
            @if(isset($menu['children']))
                <div class="dropdown-menu">
                    @foreach($menu['children'] as $child)
                        <div class="@if(isset($child['children']))dropdown-submenu @endif">
                            <a class="dropdown-item  @if(isset($child['children'])) dropdown-subitem @endif" href="{{url($child['link'])}}">{{$child['title']}}</a>
                            @if(isset($child['children']))
                                <div class="dropdown-menu">
                                    @foreach($child['children'] as $subchild)
                                        <a class="dropdown-item" href="{{url($subchild['link'])}}">{{$subchild['title']}}</a>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            @endif
        </li>
    @endforeach
</ul>

