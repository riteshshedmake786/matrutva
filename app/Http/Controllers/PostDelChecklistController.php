<?php

namespace App\Http\Controllers;
use App\Models\PostDelChecklist;
use Illuminate\Http\Request;

class PostDelChecklistController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return $PostDelChecklist = PostDelChecklist ::all(); 
    }

    public function getByID(Request $request){
        $PostDelChecklist = PostDelChecklist::where('patient_id', request("patient_id"))->first();

        return json_encode($PostDelChecklist);
    }

    public function store(Request $request){
        $PostDelChecklist = new PostDelChecklist;
        $PostDelChecklist->active_mngt = request("active_mngt");
        $PostDelChecklist->episiotomy = request("episiotomy");
        $PostDelChecklist->dcc = request("dcc");
        $PostDelChecklist->placenta = request("placenta");
        if(request("placenta") == "yes"){
            $PostDelChecklist->observation = request("observation");
        }else{
            $PostDelChecklist->observation = "";
        }
        $PostDelChecklist->tear = request("tear");
        if(request("tear") == "yes"){
            $PostDelChecklist->repair_done = request("repair_done");
        }else{
            $PostDelChecklist->repair_done = "";
        }
        $PostDelChecklist->ppiucd = request("ppiucd");
        $PostDelChecklist->cct = request("cct");
        $PostDelChecklist->massage = request("massage");
        $PostDelChecklist->oxytocin = request("oxytocin");
        $PostDelChecklist->misoprostol = request("misoprostol");
        $PostDelChecklist->counselling_dsd = request("counselling_dsd");
        $PostDelChecklist->fpma = request("fpma");
        $PostDelChecklist->complications = request("complications");
        $PostDelChecklist->patient_id = request("patient_id");
        $PostDelChecklist->save();
        return json_encode($PostDelChecklist);
        
    }
    public function update(Request $request){
        $PostDelChecklist = PostDelChecklist::where('patient_id', request("patient_id"))->first();
        $PostDelChecklist->active_mngt = request("active_mngt");
        $PostDelChecklist->episiotomy = request("episiotomy");
        $PostDelChecklist->dcc = request("dcc");
        $PostDelChecklist->placenta = request("placenta");
        if(request("placenta") == "yes"){
            $PostDelChecklist->observation = request("observation");
        }else{
            $PostDelChecklist->observation = "";
        }
        $PostDelChecklist->tear = request("tear");
        if(request("tear") == "yes"){
            $PostDelChecklist->repair_done = request("repair_done");
        }else{
            $PostDelChecklist->repair_done = "";
        }
        $PostDelChecklist->ppiucd = request("ppiucd");
        $PostDelChecklist->cct = request("cct");
        $PostDelChecklist->massage = request("massage");
        $PostDelChecklist->oxytocin = request("oxytocin");
        $PostDelChecklist->misoprostol = request("misoprostol");
        $PostDelChecklist->counselling_dsd = request("counselling_dsd");
        $PostDelChecklist->fpma = request("fpma");
        $PostDelChecklist->complications = request("complications");
        $PostDelChecklist->patient_id = request("patient_id");
        $PostDelChecklist->save();
        return json_encode($PostDelChecklist);
    }

    public function delete(Request $request){
        $PostDelChecklist = PostDelChecklist::where('patient_id', request("patient_id"))->first();
        $PostDelChecklist->delete();
        return json_encode('deleted');
    }
    
}
