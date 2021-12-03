<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PatientTreatmentController;
use App\Http\Controllers\AdmissionNotesController;
use App\Http\Controllers\TakeConsentController;
use App\Http\Controllers\PostDelChecklistController;
use App\Http\Controllers\PreDelChecklistController;
use App\Http\Controllers\ReferLamaController;
use App\Http\Controllers\RobsonController;
use App\Http\Controllers\BishopController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\ComplicationController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/login', [UserController::class,'login']);
Route::post('/register', [UserController::class,'register']);
Route::post('/logout', [UserController::class,'logout']);
Route::group(['middleware' => 'auth:api'], function(){
    Route::post('/logout', [UserController::class,'logout']);

    //patient treatment
    Route::get('/get', [PatientTreatmentController::class,'index']);
    Route::post('/store', [PatientTreatmentController::class,'store']);
    Route::post('/update', [PatientTreatmentController::class,'update']);
    Route::post('/delete', [PatientTreatmentController::class,'delete']);
    Route::get('/getByID', [PatientTreatmentController::class,'getByID']);
    // patient data
    Route::get('patient/get', [PatientController::class,'index']);
    Route::post('patient/urg_case', [PatientController::class,'emergency_case']);
    Route::post('patient/store', [PatientController::class,'store']);
    Route::post('patient/update', [PatientController::class,'update']);
    Route::post('patient/delete', [PatientController::class,'delete']);
    Route::get('patient/getByID', [PatientController::class,'getByID']);
    // patient admission Notes
    Route::get('patient/admission/get', [AdmissionNotesController::class,'index']);
    Route::post('patient/admission/store', [AdmissionNotesController::class,'store']);
    Route::post('patient/admission/update', [AdmissionNotesController::class,'update']);
    Route::post('patient/admission/delete', [AdmissionNotesController::class,'delete']);
    Route::get('patient/admission/getByID', [AdmissionNotesController::class,'getByID']);
    //take consent
    Route::get('patient/takeconsent/get', [TakeConsentController::class,'index']);
    Route::post('patient/takeconsent/store', [TakeConsentController::class,'store']);
    Route::post('patient/takeconsent/update', [TakeConsentController::class,'update']);
    Route::post('patient/takeconsent/delete', [TakeConsentController::class,'delete']);
    Route::get('patient/takeconsent/getByID', [TakeConsentController::class,'getByID']);
    //post delivery check list
    Route::get('patient/postdel/get', [PostDelChecklistController::class,'index']);
    Route::post('patient/postdel/store', [PostDelChecklistController::class,'store']);
    Route::post('patient/postdel/update', [PostDelChecklistController::class,'update']);
    Route::post('patient/postdel/delete', [PostDelChecklistController::class,'delete']);
    Route::get('patient/postdel/getByID', [PostDelChecklistController::class,'getByID']);
    //pre delivery check list
    Route::get('patient/predel/get', [PreDelChecklistController::class,'index']);
    Route::post('patient/predel/store', [PreDelChecklistController::class,'store']);
    Route::post('patient/predel/update', [PreDelChecklistController::class,'update']);
    Route::post('patient/predel/delete', [PreDelChecklistController::class,'delete']);
    Route::get('patient/predel/getByID', [PreDelChecklistController::class,'getByID']);
     //Refer lama
    Route::get('patient/refer/get', [ReferLamaController::class,'index']);
    Route::post('patient/refer/store', [ReferLamaController::class,'store']);
    Route::post('patient/refer/update', [ReferLamaController::class,'update']);
    Route::post('patient/refer/delete', [ReferLamaController::class,'delete']);
    Route::get('patient/refer/getByID', [ReferLamaController::class,'getByID']);
     //robson score
    Route::get('patient/robson/get', [RobsonController::class,'index']);
    Route::post('patient/robson/store', [RobsonController::class,'store']);
    Route::post('patient/robson/update', [RobsonController::class,'update']);
    Route::post('patient/robson/delete', [RobsonController::class,'delete']);
    Route::get('patient/robson/getByID', [RobsonController::class,'getByID']);
    //bishop score
    Route::get('patient/bishop/get', [BishopController::class,'index']);
    Route::post('patient/bishop/store', [BishopController::class,'store']);
    Route::post('patient/bishop/update', [BishopController::class,'update']);
    Route::post('patient/bishop/delete', [BishopController::class,'delete']);
    Route::get('patient/bishop/getByID', [BishopController::class,'getByID']);
    // notes
    Route::get('patient/notes/get', [NotesController::class,'index']);
    Route::post('patient/notes/store', [NotesController::class,'store']);
    Route::post('patient/notes/update', [NotesController::class,'update']);
    Route::post('patient/notes/delete', [NotesController::class,'delete']);
    Route::get('patient/notes/getByID', [NotesController::class,'getByID']);
    //complication
    Route::get('patient/comp/get', [ComplicationController::class,'index']);
    Route::post('patient/comp/store', [ComplicationController::class,'store']);
    Route::post('patient/comp/update', [ComplicationController::class,'update']);
    Route::post('patient/comp/delete', [ComplicationController::class,'delete']);
    Route::get('patient/comp/getByID', [ComplicationController::class,'getByID']);
});
