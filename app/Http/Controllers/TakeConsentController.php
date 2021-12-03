<?php

namespace App\Http\Controllers;
use App\Models\TakeConsent;
use Illuminate\Http\Request;

class TakeConsentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return $TakeConsent = TakeConsent ::all(); 
    }

    public function getByID(Request $request){
        $TakeConsent = TakeConsent::where('patient_id', request("patient_id"))->first();

        return json_encode($TakeConsent);
    }

    public function store(Request $request){
        $TakeConsent = new TakeConsent;
        $TakeConsent->consent_for = request("consent_for");
        $TakeConsent->name = request("name");
        $TakeConsent->age = request("age");
        $TakeConsent->address = request("address");
        $TakeConsent->relation = request("relation");
        $TakeConsent->f_or_m_name = request("f_or_m_name");
        $TakeConsent->p_relation = request("p_relation");
         if(request("p_relation") == "other"){
            $TakeConsent->oth_rel = request("oth_rel");
         }else{
            $TakeConsent->oth_rel = "";
         }
        $TakeConsent->attendant = request("attendant");
        $TakeConsent->attendant_name = request("attendant_name");
        $TakeConsent->patient_id = request("patient_id");
        $TakeConsent->save();
        return json_encode($TakeConsent);
        
    }
    public function update(Request $request){
        $TakeConsent = TakeConsent::where('patient_id', request("patient_id"))->first();
        $TakeConsent->consent_for = request("consent_for");
        $TakeConsent->name = request("name");
        $TakeConsent->age = request("age");
        $TakeConsent->address = request("address");
        $TakeConsent->relation = request("relation");
        $TakeConsent->f_or_m_name = request("f_or_m_name");
        $TakeConsent->p_relation = request("p_relation");
        if(request("p_relation") == "other"){
            $TakeConsent->oth_rel = request("oth_rel");
        }else{
            $TakeConsent->oth_rel = "";
        }
        $TakeConsent->attendant = request("attendant");
        $TakeConsent->attendant_name = request("attendant_name");
        $TakeConsent->patient_id = request("patient_id");
        $TakeConsent->save();
        return json_encode($TakeConsent);
    }

    public function delete(Request $request){
        $TakeConsent = TakeConsent::where('patient_id', request("patient_id"))->first();
        $TakeConsent->delete();
        return json_encode('deleted');
    }

}
