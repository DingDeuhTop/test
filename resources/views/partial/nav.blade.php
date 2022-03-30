<ul class="nav navbar-nav nav-pos-right navbar-right nav-split">
    @if ($nav->slug != 'album')
        <li><a data-scroll="scrollTo" style="color: black" href="#{{ $nav->slug }}">{{ $nav->title }}</a>
        </li>
    @else
        <li><a data-scroll="scrollTo" style="color: black" href="{{ $nav->slug }}">{{ $nav->title }}</a></li>
    @endif
</ul>
