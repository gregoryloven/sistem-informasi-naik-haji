<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            SI HAJI
        </a>

        <a href="ticket.html" class="btn custom-btn d-lg-none ms-auto me-4">Buy Ticket</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_1">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_2">Doa</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_6">Album</a>
                </li>

                <!-- <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_3">Doa</a>
                </li> -->

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_5">Paket</a>
                </li>

                @auth
                <li class="nav-item">
                    <a href="/daftar-haji/create" class="nav-link click-scroll">Daftar</a>
                </li>
                @endauth

            </ul>

            @auth
            <div class="dropdown">
            <!-- <li class="nav-item dropdown"> -->
                <button class="btn custom-btn d-lg-block d-none dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name }}
                </button>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            <!-- </li> -->
            <div>
            @else
                <a href="/daftar-haji/create" class="btn custom-btn d-lg-block d-none">Daftar</a>
            @endauth
            
        </div>
    </div>
</nav>