<?php

namespace App\Http\Controllers;
use App\Models\AdmissionNotes;
use Illuminate\Http\Request;

class AdmissionNotesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return $AdmissionNotes = AdmissionNotes ::all(); 
    }

    public function getByID(Request $request){
        $AdmissionNotes = AdmissionNotes::where('patient_id', request("patient_id"))->first();

        return json_encode($AdmissionNotes);
    }

    public function store(Request $request){
        $AdmissionNotes = new AdmissionNotes;
        $AdmissionNotes->chief_comp = request("chief_comp");
        $AdmissionNotes->oth_comp = request("oth_comp");
        $AdmissionNotes->lmp = request("lmp");
        $AdmissionNotes->edd = request("edd");
        $AdmissionNotes->gravida = request("gravida");
        $AdmissionNotes->para = request("para");
        $AdmissionNotes->living_children = request("living_children");
        $AdmissionNotes->abortions = request("abortions");
        $AdmissionNotes->patient_id = request("patient_id");
        $AdmissionNotes->save();
        return json_encode($AdmissionNotes);
        
    }
    public function update(Request $request){
        $AdmissionNotes = AdmissionNotes::where('patient_id', request("patient_id"))->first();
        $AdmissionNotes->chief_comp = request("chief_comp");
        $AdmissionNotes->oth_comp = request("oth_comp");
        $AdmissionNotes->lmp = request("lmp");
        $AdmissionNotes->edd = request("edd");
        $AdmissionNotes->gravida = request("gravida");
        $AdmissionNotes->para = request("para");
        $AdmissionNotes->living_children = request("living_children");
        $AdmissionNotes->abortions = request("abortions");
        $AdmissionNotes->patient_id = request("patient_id");
        $AdmissionNotes->save();
        return json_encode($AdmissionNotes);
    }

    public function delete(Request $request){
        $AdmissionNotes = AdmissionNotes::where('patient_id', request("patient_id"))->first();
        $AdmissionNotes->delete();
        return json_encode('deleted');
    }
    
}
