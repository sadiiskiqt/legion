<!-- Navbar -->
<div class="w3-top">
    <ul class="w3-navbar w3-theme-d2 w3-left-align w3-large">
        <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
            <a class="w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);"
               onclick="openNav()">
                <i class="fa fa-bars"></i>
            </a>
        </li>
        <li>
            <a href="legion" class="w3-padding-large w3-theme-d4">
                <i class="fa fa-home w3-margin-right"></i>mmaLegion.com</a>
        </li>


        @if (Auth::guest())
            <li class="w3-hide-small">
                <a href="legion" class="w3-padding-large w3-hover-white" title="News">
                    Начало
                </a>
            </li>
            {{--<li class="w3-hide-small">--}}
            {{--<a href="fbgallery" class="w3-padding-large w3-hover-white" title="News">--}}
            {{--FB Галерия--}}
            {{--</a>--}}
            {{--</li>--}}
            <li class="w3-hide-small">
                <a href="home" class="w3-padding-large w3-hover-white" title="News">
                    <i class="fa fa-globe">
                    </i>
                </a>
            </li>
            <li><a href="{{ route('login') }}">Вход</a></li>
            <li><a href="{{ route('register') }}">Нова Регистрация</a></li>
        @else
            <li class="w3-hide-small">
                <a href="legion" class="w3-padding-large w3-hover-white" title="News">
                    Начало
                </a>
            </li>
            {{--<li class="w3-hide-small">--}}
            {{--<a href="fbgallery" class="w3-padding-large w3-hover-white" title="News">--}}
            {{--FB Галерия--}}
            {{--</a>--}}
            {{--</li>--}}
            <li class="w3-hide-small">
                <a href="home" class="w3-padding-large w3-hover-white" title="Нови публикации">
                    <i class="fa fa-globe">
                        Нови публикации
                    </i>
                </a>
            </li>
            {{--<li class="w3-hide-small">--}}
                {{--<a href="#" class="w3-padding-large w3-hover-white" title="Account Settings">--}}
                    {{--<i class="fa fa-user">--}}
                    {{--</i>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li class="w3-hide-small">--}}
                {{--<a href="#" class="w3-padding-large w3-hover-white" title="Messages">--}}
                    {{--<i class="fa fa-envelope">--}}
                    {{--</i>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li class="w3-hide-small w3-dropdown-hover">--}}
                {{--<a href="#" class="w3-padding-large w3-hover-white" title="Notifications">--}}
                    {{--<i class="fa fa-bell">--}}
                    {{--</i>--}}
                    {{--<span class="w3-badge w3-right w3-small w3-green">3</span>--}}
                {{--</a>--}}
                {{--<div class="w3-dropdown-content w3-white w3-card-4">--}}
                    {{--<a href="#">One new friend request</a>--}}
                    {{--<a href="#">John Doe posted on your wall</a>--}}
                    {{--<a href="#">Jane likes your post</a>--}}
                {{--</div>--}}
            {{--</li>--}}

            <li class="w3-hide-small w3-right">
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                    Изход
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
            <li class="w3-hide-small w3-right">
                <a href="myprofile/{{ Auth::user()->id}}/Спортен клуб ЛЕГИОНЪ Пловдив - муай тай, кикбокс, мма, самозащита" class="w3-padding-large w3-hover-white" title="My Account">
                    <img src="{{ URL::asset('public/img/asd.jpg') }}" class="w3-circle" style="height:25px;width:25px"
                         alt="Avatar">
                </a>
            </li>
            <li class="w3-hide-small w3-right">
                <a href="myprofile/{{ Auth::user()->id}}/Спортен клуб ЛЕГИОНЪ Пловдив - муай тай, кикбокс, мма, самозащита" class="w3-padding-large w3-hover-white" title="My Account">
                    {{ Auth::user()->name }}
                </a>
            </li>
        @endif
    </ul>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:51px">
    <ul class="w3-navbar w3-left-align w3-large w3-theme">
        <li><a class="w3-padding-large" href="legion">За Нас</a></li>
        <li><a class="w3-padding-large" href="home">Нови Постове</a></li>
        @if (!Auth::guest())
            <li><a class="w3-padding-large" href="myprofile">Моя Профил</a></li>
            <li><a class="w3-padding-large" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                    Изход
                </a>
            </li>
        @endif
    </ul>
</div>
