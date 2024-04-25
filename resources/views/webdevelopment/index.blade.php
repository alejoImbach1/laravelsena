<x-html>
    @pushOnce('links')
        <link rel="stylesheet" href="{{ asset('css/webdevelopment/web-development.css') }}">
    @endPushOnce

    <x-header enunciado="Desarrollo web" />

    <div class="div-main">
        <nav class="nav-development-sections">
            <ul class="development-section p-0 text-center">
                <a href="{{ route('app.webDevelopmentDefault') }}">Descripción</a>
            </ul>
            <hr>
            <ul class="development-section p-0 text-center">
                <h5>Tareas</h5>
                <a href="{{ route('course.index') }}">Curso</a>
                <br>
                <a href="{{ route('pqrsd.index') }}">Pqrsd</a>
            </ul>
        </nav>

        <div class="section-content">
            @include($content)
        </div>
    </div>
</x-html>
