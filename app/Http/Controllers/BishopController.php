<?php

namespace App\Http\Controllers;
use App\Models\Bishop;
use Illuminate\Http\Request;

class BishopController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return $Bishop = Bishop ::all(); 
    }

    public function getByID(Request $request){
        $Bishop = Bishop::where('patient_id', request("patient_id"))->first();

        return json_encode($Bishop);
    }

    public function store(Request $request){
        $Bishop = new Bishop;
        $Bishop->cervix_diameter = request("cervix_diameter");
        $Bishop->position_of_cervix = request("position_of_cervix");
        $Bishop->effacement = request("effacement");
        $Bishop->fetal_station = request("fetal_station");
        $Bishop->cervical_consistency = request("cervical_consistency");
        $Bishop->bishop_score = request("bishop_score");
        $Bishop->patient_id = request("patient_id");
        $Bishop->save();
        return json_encode($Bishop);
    }

    public function update(Request $request){
        $Bishop = Bishop::where('patient_id', request("patient_id"))->first();
        $Bishop->cervix_diameter = request("cervix_diameter");
        $Bishop->position_of_cervix = request("position_of_cervix");
        $Bishop->effacement = request("effacement");
        $Bishop->fetal_station = request("fetal_station");
        $Bishop->cervical_consistency = request("cervical_consistency");
        $Bishop->bishop_score = request("bishop_score");
        $Bishop->patient_id = request("patient_id");
        $Bishop->save();
        return json_encode($Bishop);
    }

    public function delete(Request $request){
        $Bishop = Bishop::where('patient_id', request("patient_id"))->first();
        $Bishop->delete();
        return json_encode('deleted');
    }
}
