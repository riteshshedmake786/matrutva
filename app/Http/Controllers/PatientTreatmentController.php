<?php

namespace App\Http\Controllers;
use App\Models\PatientTreatment;
use Illuminate\Http\Request;

class PatientTreatmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        return $PatientTreatment = PatientTreatment ::all(); 
    }

    public function getByID(Request $request){
        $PatientTreatment = PatientTreatment::where('patient_id', request("patient_id"))->first();

        return json_encode($PatientTreatment);
    }

    public function store(Request $request){
        $PatientTreatment = new PatientTreatment;
        $PatientTreatment->tt = request("tt");
        $PatientTreatment->ifa = request("ifa");
        $PatientTreatment->asg = request("asg");
        $PatientTreatment->calcium = request("calcium");
        $PatientTreatment->other_drug = request("other_drug");
        if(request("other_drug")== "yes"){
            $PatientTreatment->drug_name = request("drug_name");
        }else{
            $PatientTreatment->drug_name = "";
        }
        
        $PatientTreatment->patient_id = request("patient_id");
        $PatientTreatment->save();
        return json_encode($PatientTreatment);
        
    }
    public function update(Request $request){
        $PatientTreatment = PatientTreatment::where('patient_id', request("patient_id"))->first();
        $PatientTreatment->tt = request("tt");
        $PatientTreatment->ifa = request("ifa");
        $PatientTreatment->asg = request("asg");
        $PatientTreatment->calcium = request("calcium");
        $PatientTreatment->other_drug = request("other_drug");
        if(request("other_drug")== "yes"){
            $PatientTreatment->drug_name = request("drug_name");
        }else{
            $PatientTreatment->drug_name = "";
        }
        
        $PatientTreatment->patient_id = request("patient_id");
        $PatientTreatment->save();
        return json_encode($PatientTreatment);
    }

    public function delete(Request $request){
        $PatientTreatment = PatientTreatment::where('patient_id', request("patient_id"))->first();
        $PatientTreatment->delete();
        return json_encode('deleted');
    }
}
