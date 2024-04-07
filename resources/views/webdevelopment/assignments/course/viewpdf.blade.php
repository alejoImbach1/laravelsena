<div class="modal fade" id="viewPdf{{$course->id}}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title fs-5">{{$course->file_pdf}}</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe src={{asset('storage/files/'.$course->file_pdf)}} class="w-100 vh-100"></iframe>
            </div>
        </div>
    </div>
</div>