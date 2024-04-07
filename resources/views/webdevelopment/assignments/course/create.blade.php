<div class="modal fade" id="createCourse" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Registrar curso</h1>
            </div>
            <div class="modal-body">
                <form action={{ route('course.store') }} method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nombre del curso:</label>
                        <input type="string" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="description">Descripción:</label>
                        <textarea class="form-control" name="description" rows="2"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="file_pdf">Archivo pdf:</label>
                        <input type="file" class="form-control-file" name="file_pdf" accept=".pdf">
                    </div>
                    <div class="modal-footer mt-3">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>