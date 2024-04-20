@extends('webdevelopment.index')
@section('content')
    @pushOnce('links')
        <link rel="stylesheet" href="{{asset('css/webdevelopment/pqrsd/pqrsd-index.css')}}">
    @endPushOnce
    <form action="{{route('pqrsd.store')}}" class="w-full px-5 py-2" method="POST" enctype="multipart/form-data">
        @csrf
        <h1 class="text-center mb-4">Formulario</h1>
        <div></div>
        <div class="selectores-iniciales mb-3">
            <label>
                Anónima o NO anónima
                <br>
                <select name="is_anonymous" id="selectAnonima">
                    <option value="0">NO anónima</option>
                    <option value="1">Anónima</option>
                </select>
            </label>

            <label>
                Tipo de PQRSD
                <br>
                <select name="type_pqrsd">
                    @foreach ($tiposPqrsd as $tipo)
                        <option value="{{$tipo->name}}">{{$tipo->value}}</option>
                    @endforeach
                </select>
            </label>

            <label>
                Tipo de persona
                <br>
                <select name="type_person" id="selectPersona">
                    @foreach ($tiposPersona as $tipo)
                        <option value="{{$tipo->name}}">{{$tipo->value}}</option>
                    @endforeach
                </select>
            </label>
        </div>
        <h2>Datos personales</h2>
        <p class="fs-5"><b><font color="red">*</font></b> Indica que es obligatorio</p>
        <div class="w-100 datos-personales">
            <label>
                <b><font color="red">*</font></b>
                Primer nombre
                <br>
                <input type="text" name="first_name" placeholder="Ejemplo: Juan" value="{{ old('first_name') }}" required>
            </label>
            <label>
                Segundo nombre
                <br>
                <input type="text" name="middle_name" placeholder="Ejemplo: Carlos" value="{{ old('middle_name') }}">
            </label>
            <label>
                <b><font color="red">*</font></b>
                Primer apellido
                <br>
                <input type="text" name="first_surname" placeholder="Ejemplo: Juan" value="{{ old('first_surname') }}" required>
            </label>
            <label>
                Segundo apellido
                <br>
                <input type="text" name="second_surname" placeholder="Ejemplo: Juan" value="{{ old('second_surname') }}">
            </label>
            <label>
                Tipo de documento
                <br>
                <select name="id_type">
                    @foreach ($tiposIdentificacion as $tipo)
                        <option value="{{$tipo->name}}">{{$tipo->value}}</option>
                    @endforeach
                </select>
            </label>
            <label>
                <b><font color="red">*</font></b>
                Número de identificación
                <br>
                <input type="text" pattern="[0-9]+" name="id_number" value="{{ old('id_number') }}" required>
            </label>
            <label>
                Fecha de nacimiento
                <br>
                <input type="date" name="birthday" value="{{ old('birthday') }}">
            </label>
            <label>
                Género
                <br>
                <select name="gender">
                    @foreach ($generos as $genero)
                        <option value="{{$genero->name}}">{{$genero->value}}</option>
                    @endforeach
                </select>
            </label>
            <label>
                Dirección
                <br>
                <input type="text" name="address" value="{{ old('address') }}">
            </label>
            <label>
                <b><font color="red">*</font></b>
                Correo electrónico
                <br>
                <input type="email" name="email" value="{{ old('email') }}" required>
            </label>
        </div>
        <div class="descripcion">
            <label>
                <b><font color="red">*</font></b>
                Descripción
                <br>
                <textarea name="description" id="" cols="30" rows="4" required></textarea>
            </label>
        </div>
        <div>
            <label>
                <b><font color="red">*</font></b>
                Archivo pdf
                <br>
                <input type="file" name="pdf_file" id="" accept=".pdf" required>
            </label>
        </div>
        <button class="btn btn-info my-4" type="submit">Enviar</button>
    </form>
    @pushOnce('scripts')
    <script src="{{asset('js/webdevelopment/pqrsd/pqrsd-index.js')}}"></script>
    @endPushOnce
@endsection
