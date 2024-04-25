<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\MyOwn\classes\Utility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('webdevelopment.index',[
            'content' => 'webdevelopment.assignments.course.index',
            'courses' => $courses
        ]);
    }

    public function store(Request $request)
    {
        $file = $request->file('file_pdf');
        $fileName = time() . "_" . str_replace(" ", "_", $file->getClientOriginalName());
        $aux = $request->except('_token');
        $aux['file_pdf'] = $fileName;
        Course::create($aux);
        $file->storeAs('public/files/course', $fileName);
        Utility::sendAlert('success','Se registró exitosamente');
        return to_route('course.index');
    }

    public function update(Request $request, $id)
    {
        if ($request->file_pdf == null) {
            Course::find($id)->update($request->except(['_token', 'file_pdf']));
            return to_route('course.index');
        }
        Storage::delete('public/files/' . Course::find($id)->file_pdf);
        $file = $request->file('file_pdf');
        $fileName = time() . "_" . str_replace(" ", "_", $file->getClientOriginalName());
        $aux = $request->except('_token');
        $aux['file_pdf'] = $fileName;
        Course::find($id)->update($aux);
        $file->storeAs('public/files/course', $fileName);
        Utility::sendAlert('success','Se actualizó exitosamente');
        return to_route('course.index');
    }

    public function destroy($id)
    {
        Storage::delete('public/files/' . Course::find($id)->file_pdf);
        Course::destroy($id);
        Utility::sendAlert('warning','Se eliminó el registro');
        return to_route('course.index');
    }
}
