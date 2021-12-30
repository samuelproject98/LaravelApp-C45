<div class="card-header p-0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-custom">
        <div class="container">
            <a class="navbar-brand" href="{{ URL::to('/') }}">Algoritma C4.5</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('/atribut') }}">
                            <i class="fas fa-th-large"></i>
                            Atribut
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('/nilaiatribut') }}">
                            <i class="fas fa-th"></i>
                            Nilai Atribut
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('/dataset') }}">
                            <i class="fas fa-star"></i>
                            Dataset
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('/tree') }}">
                            <i class="fas fa-signal"></i>
                            Tree
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('/perhitungan') }}">
                            <i class="fas fa-calendar"></i>
                            Perhitungan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('/password') }}">
                            <i class="fas fa-lock"></i>
                            Password
                        </a>
                    </li>
                    <li class="nav-item">
                        <form action="{{ URL::to('/logout') }}" method="post">
                            @csrf
                            <button type="submit" class="btn nav-link">
                                <i class="fas fa-sign-out-alt"></i>
                                Logout
                            </button>
                        </form>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('/konsultasi') }}">
                            <i class="fas fa-calendar-alt"></i>
                            Konsultasi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('/login') }}">
                            <i class="fas fa-sign-in-alt"></i>
                            Login
                        </a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
</div>