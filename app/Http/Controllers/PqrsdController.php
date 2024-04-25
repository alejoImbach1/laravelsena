<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Pqrsd as ModelsPqrsd;
use App\MyOwn\classes\Utility;
use App\MyOwn\Enums\Gender;
use App\MyOwn\Enums\IdType;
use App\MyOwn\Enums\Person;
use App\MyOwn\Enums\Pqrsd;
use Illuminate\Http\Request;

class PqrsdController extends Controller
{
    public function index(){
        return view('webdevelopment.index',[
            'tiposPqrsd' => Pqrsd::cases(),
            'tiposPersona' => Person::cases(),
            'generos' => Gender::cases(),
            'tiposIdentificacion' => IdType::cases(),
            'content' => 'webdevelopment.assignments.pqrsd.index'
        ]);
    }

    public function store(Request $request){
        $pdfFile = $request->file('pdf_file');
        $fileName = time() . "_" . str_replace(" ", "_", $pdfFile->getClientOriginalName());
        $pqrsdModel = new ModelsPqrsd($request->only(['is_anonymous','type_pqrsd','description']));
        $pqrsdModel->url_pdf = $fileName;
        $pdfFile->storeAs('public/files/pqrsd', $fileName);
        $pqrsdModel->id_client = (!$request->is_anonymous) ? Client::insertGetId($request->except(['_token','is_anonymous','type_pqrsd','description','pdf_file'])):null;
        $pqrsdModel->save();
        Utility::sendAlert('success','Se registró el pqrsd');
        return to_route('pqrsd.index');
    }
}
