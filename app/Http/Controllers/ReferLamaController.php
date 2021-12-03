<?php

namespace App\Http\Controllers;
use App\Models\ReferLama;
use Illuminate\Http\Request;

class ReferLamaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return $ReferLama = ReferLama ::all(); 
    }

    public function getByID(Request $request){
        $ReferLama = ReferLama::where('patient_id', request("patient_id"))->first();

        return json_encode($ReferLama);
    }

    public function store(Request $request){
        $ReferLama = new ReferLama;
        $ReferLama->mother_reason = request("mother_reason");
        if(request("mother_reason") == "other"){
            $ReferLama->mother_reason_text = request("mother_reason_text");
        }else{
            $ReferLama->mother_reason_text = "";
        }
        $ReferLama->child_reason = "";
        $ReferLama->child_reason_text = "";
        $ReferLama->referal_facility = request("referal_facility");
        $ReferLama->patient_id = request("patient_id");
        $ReferLama->save();
        return json_encode($ReferLama);
        
    }
    public function update(Request $request){
        $ReferLama = ReferLama::where('patient_id', request("patient_id"))->first();
        $ReferLama->mother_reason = request("mother_reason");
        if(request("mother_reason") == "other"){
            $ReferLama->mother_reason_text = request("mother_reason_text");
        }else{
            $ReferLama->mother_reason_text = "";
        }
        $ReferLama->child_reason = request("child_reason");
        if(request("child_reason") == "other"){
            $ReferLama->child_reason_text = request("child_reason_text");
        }else{
            $ReferLama->child_reason_text = "";
        }
        
        $ReferLama->referal_facility = request("referal_facility");
        $ReferLama->patient_id = request("patient_id");
        $ReferLama->save();
        return json_encode($ReferLama);
    }

    public function delete(Request $request){
        $ReferLama = ReferLama::where('patient_id', request("patient_id"))->first();
        $ReferLama->delete();
        return json_encode('deleted');
    }
    
}
