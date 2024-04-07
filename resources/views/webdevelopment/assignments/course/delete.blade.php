<div class="modal fade" id="delete{{$course->id}}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Eliminar curso</h1>
            </div>
            <div class="modal-body">
                <form action={{ route('course.destroy',$course->id) }} method="post">
                    @csrf
                    @method('DELETE')
                    <h4>
                        ¿Está seguro/a que desea eliminar el curso {{$course->name}}, ID: {{$course->id}}?
                    </h4>
                    <div class="modal-footer mt-3">
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>