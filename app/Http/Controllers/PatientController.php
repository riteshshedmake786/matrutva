<?php

namespace App\Http\Controllers;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return $Patient = Patient ::all(); 
    }

    public function getByID(Request $request){
        $Patient = Patient::find($request->id);

        return json_encode($Patient);
    }

   public function emergency_case(){
        $Patient = new Patient;
        $Patient->name = "Emergency Case";
        $Patient->patient_status = request("patient_status");
        $Patient->refered = request("refered");
        $Patient->staff_id = request("staff_id");
        if(empty(request("labor_start_time"))){
            $Patient->doctor = "";
            $Patient->age = "";
            $Patient->mobno = "";
            $Patient->labor_start_time = null;
            $Patient->IPD_Reg_No ="" ;
            $Patient->aadhar_no ="";
            $Patient->OPD_NO = "";
            $Patient->MCTS_NO ="";
            $Patient->bed = "";
            $Patient->marital_status ="";
            $Patient->g_relation = "";
            $Patient->gaurdians_relation = "";
            $Patient->g_name = "";
            $Patient->birth_cn = "";
            $Patient->asha = "";
            $Patient->address = "";
            $Patient->booked_status = "";
            $Patient->bpl_status = "";
            }
        $Patient->save();
        return json_encode($Patient);
   }

    public function store(Request $request){
        $Patient = new Patient;
        $Patient->name = request("name");
        $Patient->doctor = request("doctor");
        $Patient->age = request("age");
        $Patient->mobno = request("mobno");
        $Patient->patient_status = request("patient_status");
        $Patient->staff_id = request("staff_id");

        if(empty(request("labor_start_time"))){
        $Patient->labor_start_time = null;
        $Patient->IPD_Reg_No ="" ;
        $Patient->aadhar_no ="";
        $Patient->OPD_NO = "";
        $Patient->MCTS_NO ="";
        $Patient->bed = "";
        $Patient->marital_status ="";
        $Patient->g_relation = "";
        $Patient->gaurdians_relation = "";
        $Patient->g_name = "";
        $Patient->birth_cn = "";
        $Patient->asha = "";
        $Patient->address = "";
        $Patient->booked_status = "";
        $Patient->bpl_status = "";
        $Patient->refered = "";
        }
        $Patient->save();
        return json_encode($Patient);
        
    }
    public function update(Request $request){
        $Patient = Patient::find(request("id"));
        $Patient->name = request("name");
        $Patient->doctor = request("doctor");
        $Patient->labor_start_time = request("labor_start_time");
        $Patient->mobno = request("mobno");
        $Patient->IPD_Reg_No = request("IPD_Reg_No");
        $Patient->aadhar_no = request("aadhar_no");
        $Patient->OPD_NO = request("OPD_NO");
        $Patient->MCTS_NO = request("MCTS_NO");
        $Patient->age = request("age");
        $Patient->bed = request("bed");
        $Patient->marital_status = request("marital_status");
        $Patient->g_relation = request("g_relation");
        if(request("g_relation") == "other"){
            $Patient->gaurdians_relation = request("gaurdians_relation");
        }else{
            $Patient->gaurdians_relation = "";
        }
        
        $Patient->g_name = request("g_name");
        $Patient->birth_cn = request("birth_cn");
        $Patient->asha = request("asha");
        $Patient->address = request("address");
        $Patient->booked_status = request("booked_status");
        $Patient->bpl_status = request("bpl_status");
        $Patient->patient_status =  request("patient_status");
        $Patient->staff_id = request("staff_id");
        $Patient->refered = "";
        $Patient->save();
        return json_encode($Patient);
    }

    public function delete(Request $request){
        $Patient = Patient::find($request->id);
        $Patient->delete();
        return json_encode('deleted');
    }    
}
