@props(['enunciado' => ''])
<div class="position-fixed top-0 w-100 px-3 z-2 bg-light">
    <div class="screen-size d-flex justify-content-between">
        <div class="d-flex">
            <a href={{ route('app.index') }}>
                <img class="logo-sena" src="{{ asset('default/icons/sena-logo.svg') }}" alt="">
            </a>
            <div class="ms-3" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Competencias
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href={{ route('app.webDevelopmentDefault') }}>Desarrollo
                                    web</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <h1>{{ $enunciado }}</h1>
        <div class="nav-info">
            <span>Alejandro Imbachí</span>
            <br>
            <span>Ficha 2680967</span>
        </div>
    </div>
</div>
