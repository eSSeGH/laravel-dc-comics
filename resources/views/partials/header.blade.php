<header class="main-header">

    <div class="container">

        <a href="{{ route('welcome') }}" class="logo">
            <img src="{{ asset('dc-img/dc-logo.png') }}" alt="dc logo horizontal">
        </a>

        <nav class="navbar">

            <ul style='display: contents'>
                <li class="nav-link">
                    <a href="">CHARACTERS</a>
                </li>
                <li class="nav-link" >
                    <a href="{{ route('comics.index') }}" style="color: lime;">COMICS</a>
                </li>
                <li class="nav-link">
                    <a href="">MOVIES</a>
                </li>
                <li class="nav-link">
                    <a href="">TV</a>
                </li>
                <li class="nav-link">
                    <a href="">GAMES</a>
                </li>
                <li class="nav-link">
                    <a href="">COLLECTIBLES</a>
                </li>
                <li class="nav-link">
                    <a href="">VIDEOS</a>
                </li>
                <li class="nav-link">
                    <a href="">FANS</a>
                </li>
                <li class="nav-link">
                    <a href="">NEWS</a>
                </li>
                <li class="nav-link">
                    <a href="">SHOP</a>
                </li>
                <li class="nav-link" >
                    <a href="{{ route('comics.create') }}" style="color: lime;">INSERT COMIC</a>
                </li>
            </ul>

        </nav>

    </div>

</header>