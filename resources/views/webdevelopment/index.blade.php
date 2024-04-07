@include('layouts.head')
</head>

<body>
    @include('layouts.header', ['enunciado' => $enunciado])
    <div class="d-flex">
        <div class="nav flex-column w-25 ps-3 pe-3">
            <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item border-0">
                    <button class="accordion-button p-2" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapseOne">
                        Tareas
                    </button>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                            <a class="nav-link" href={{ route('course.index') }}>Crud curso</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex w-100 justify-content-center">
            @yield('content')
        </div>
    </div>

    @include('layouts.foot')
