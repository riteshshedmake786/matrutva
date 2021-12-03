<?php

namespace App\Http\Controllers;
use App\Models\Robson;
use Illuminate\Http\Request;

class RobsonController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return $Robson = Robson ::all(); 
    }

    public function getByID(Request $request){
        $Robson = Robson::where('patient_id', request("patient_id"))->first();

        return json_encode($Robson);
    }

    public function store(Request $request){
        $Robson = new Robson;
        $Robson->parity = request("parity");
        $Robson->pre_c_section = request("pre_c_section");
        $Robson->gestational_age = request("gestational_age");
        $Robson->fetal_presentation = request("fetal_presentation");
        $Robson->no_of_fetus = request("no_of_fetus");
        $Robson->labor_type = request("labor_type");
        $Robson->robson_score = request("robson_score");
        $Robson->patient_id = request("patient_id");
        $Robson->save();
        return json_encode($Robson);
    }

    public function update(Request $request){
        $Robson = Robson::where('patient_id', request("patient_id"))->first();
        $Robson->parity = request("parity");
        $Robson->pre_c_section = request("pre_c_section");
        $Robson->gestational_age = request("gestational_age");
        $Robson->fetal_presentation = request("fetal_presentation");
        $Robson->no_of_fetus = request("no_of_fetus");
        $Robson->labor_type = request("labor_type");
        $Robson->robson_score = request("robson_score");
        $Robson->patient_id = request("patient_id");
        $Robson->save();
        return json_encode($Robson);
    }

    public function delete(Request $request){
        $Robson = Robson::where('patient_id', request("patient_id"))->first();
        $Robson->delete();
        return json_encode('deleted');
    }
}
