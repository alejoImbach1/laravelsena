@extends('webdevelopment.index')
@section('content')
    @include('webdevelopment.assignments.course.create')
    <!-- Button trigger modal -->
    <div>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createCourse">
            Crear curso
        </button>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE DEL CURSO</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">ARCHIVO PDF</th>
                    <th scope="col">OPCIONES</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                    <tr>
                        <th scope="row">{{ $course->id }}</th>
                        <td>{{ $course->name }}</td>
                        <td>{{ $course->description }}</td>
                        <td>
                            <a href="#"
                                class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                                data-bs-toggle="modal" data-bs-target="#viewPdf{{ $course->id }}">
                                {{ $course->file_pdf }}
                            </a>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                data-bs-target="#edit{{ $course->id }}">
                                <i class="fa-solid fa-pen"></i>
                            </button>
                            <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                data-bs-target="#delete{{ $course->id }}">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    @include('webdevelopment.assignments.course.edit')
                    @include('webdevelopment.assignments.course.delete')
                    @include('webdevelopment.assignments.course.viewpdf')
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
