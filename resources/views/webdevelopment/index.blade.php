@include('layouts.head')
<link rel="stylesheet" href="{{ asset('css/web-development.css') }}">
</head>

<body>
    @include('layouts.header', ['enunciado' => "Desarrollo web"])
    <div class="div-main">
        <nav class="nav-development-sections">
            <ul class="development-section p-0 text-center">
                <a href="{{ route('app.webDevelopmentDefault') }}">Descripción</a>
            </ul>
            <hr>
            <ul class="development-section p-0 text-center">
                <h5>Tareas</h5>
                <a href="{{ route('course.index') }}">Curso</a>
            </ul>
        </nav>

        <div class="section-content">
            @yield('content')
        </div>
    </div>

    @include('layouts.foot')
