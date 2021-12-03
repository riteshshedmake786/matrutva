<?php

namespace App\Http\Controllers;
use App\Models\Complication;
use Illuminate\Http\Request;

class ComplicationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return $Complication = Complication ::all(); 
    }

    public function getByID(Request $request){
        $Complication = Complication::where('patient_id', request("patient_id"))->first();

        return json_encode($Complication);
    }

    public function store(Request $request){
        $Complication = new Complication;
        $Complication->complications = request("complications");
        $Complication->patient_id = request("patient_id");
        $Complication->save();
        return json_encode($Complication);
    }

    public function update(Request $request){
        $Complication = Complication::where('patient_id', request("patient_id"))->first();
        $Complication->complications = request("complications");
        $Complication->patient_id = request("patient_id");
        $Complication->save();
        return json_encode($Complication);
    }

    public function delete(Request $request){
        $Complication = Complication::where('patient_id', request("patient_id"))->first();
        $Complication->delete();
        return json_encode('deleted');
    }
}
