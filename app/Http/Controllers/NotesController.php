<?php

namespace App\Http\Controllers;
use App\Models\Notes;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return $Notes = Notes ::all(); 
    }

    public function getByID(Request $request){
        $Notes = Notes::where('patient_id', request("patient_id"))->first();

        return json_encode($Notes);
    }

    public function store(Request $request){
        $Notes = new Notes;
        $Notes->staff_id = request("staff_id");
        $Notes->Staff_role = request("Staff_role");
        $Notes->notes = request("notes");
        $Notes->patient_id = request("patient_id");
        $Notes->save();
        return json_encode($Notes);
    }

    public function update(Request $request){
        $Notes = Notes::where('patient_id', request("patient_id"))->first();
        $Notes->staff_id = request("staff_id");
        $Notes->Staff_role = request("Staff_role");
        $Notes->notes = request("notes");
        $Notes->patient_id = request("patient_id");
        $Notes->save();
        return json_encode($Notes);
    }

    public function delete(Request $request){
        $Notes = Notes::where('patient_id', request("patient_id"))->first();
        $Notes->delete();
        return json_encode('deleted');
    }
}
