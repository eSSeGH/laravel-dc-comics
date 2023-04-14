<header class="main-header" style="height: 90px;">

    <div class="container flex-center">

        <div class="logo">
            <img src="{{ Vite::asset('../../images/dc-logo.png') }}" alt="dc logo horizontal">
        </div>

        <nav class="navbar">

            <ul style='display: contents'>
                <li class="nav-link">
                    <a href="">CHARACTERS</a>
                </li>
                <li class="nav-link">
                    <a href="{{ route('comics.index') }}">COMICS</a>
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
                <li class="nav-link">
                    <a href="{{ route('comics.create') }}">INSERT COMIC</a>
                </li>
            </ul>

        </nav>

    </div>

</header>