<link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}">

<nav class="navbar">
    <div class="max-width">
        <div class="name"><a href="/">Teodor <span>Ivanov</span></a></div>
        <ul class="nav">
            <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/">Home</a></li>
            <li class="{{ Request::is('profile') ? 'active' : '' }}"><a href="/profile">Profile</a></li>
            <li class="{{ Request::is('grades') ? 'active' : '' }}"><a href="{{route('grades.index')}}">Dashboard</a></li>
            <li class="{{ Request::is('posts') ? 'active' : '' }}"><a href="{{ route('posts.index') }}">Blog</a></li>
            <li class="{{ Request::is('faqs') ? 'active' : '' }}"><a href="{{ route('faqs.index') }}">FAQ</a></li>
            <li class="{{ Request::is('gallery') ? 'active' : '' }}"><a href="/gallery">Gallery</a></li>
            <li class="{{ Request::is('people') ? 'active' : '' }}"><a href="{{ route('people.index') }}">People</a></li>


            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            @endguest
        </ul>

        <ul class="navbar-nav ml-auto">

        </ul>

    </div>
</nav>
