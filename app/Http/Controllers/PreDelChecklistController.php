<?php

namespace App\Http\Controllers;
use App\Models\PreDelChecklist;
use Illuminate\Http\Request;

class PreDelChecklistController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return $PreDelChecklist = PreDelChecklist ::all(); 
    }

    public function getByID(Request $request){
        $PreDelChecklist = PreDelChecklist::where('patient_id', request("patient_id"))->first();

        return json_encode($PreDelChecklist);
    }

    public function store(Request $request){
        $PreDelChecklist = new PreDelChecklist;
        $PreDelChecklist->spot_light = request("spot_light");
        $PreDelChecklist->gloves = request("gloves");
        $PreDelChecklist->soap_water = request("soap_water");
        $PreDelChecklist->oxytocin = request("oxytocin");
        $PreDelChecklist->pad = request("pad");
        $PreDelChecklist->towel = request("towel");
        $PreDelChecklist->scissors = request("scissors");
        $PreDelChecklist->mucus_extractor = request("mucus_extractor");
        $PreDelChecklist->cord_ligature = request("cord_ligature");
        $PreDelChecklist->bag_mask = request("bag_mask");
        $PreDelChecklist->patient_id = request("patient_id");
        $PreDelChecklist->save();
        return json_encode($PreDelChecklist);
        
    }
    public function update(Request $request){
        $PreDelChecklist = PreDelChecklist::where('patient_id', request("patient_id"))->first();
        $PreDelChecklist->spot_light = request("spot_light");
        $PreDelChecklist->gloves = request("gloves");
        $PreDelChecklist->soap_water = request("soap_water");
        $PreDelChecklist->oxytocin = request("oxytocin");
        $PreDelChecklist->pad = request("pad");
        $PreDelChecklist->towel = request("towel");
        $PreDelChecklist->scissors = request("scissors");
        $PreDelChecklist->mucus_extractor = request("mucus_extractor");
        $PreDelChecklist->cord_ligature = request("cord_ligature");
        $PreDelChecklist->bag_mask = request("bag_mask");
        $PreDelChecklist->patient_id = request("patient_id");
        $PreDelChecklist->save();
        return json_encode($PreDelChecklist);
    }

    public function delete(Request $request){
        $PostDelChecklist = PostDelChecklist::where('patient_id', request("patient_id"))->first();
        $PostDelChecklist->delete();
        return json_encode('deleted');
    }
    
}
