<header>
    <div class="nav_logo">
        <a href="{{route('homepage')}}"><img src="{{asset('images/logo.png')}}" alt="Molisana logo"></a>
    </div>
    <nav class="main_nav">
        <ul>
            <li><a href="{{route('homepage')}}" class="{{(Request::route()->getName() == 'homepage') ? 'active' : ''}}">Home</a></li>
            <li><a href="{{route('pag-prodotti')}}" class="{{(Request::route()->getName() == 'pag-prodotti') ? 'active' : ''}}">Prodotti</a></li>
            <li><a href="{{route('pag-news')}}" class="{{(Request::route()->getName() == 'pag-news') ? 'active' : ''}}">News</a></li>
        </ul>
    </nav>
</header>