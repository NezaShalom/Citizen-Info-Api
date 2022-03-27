<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Nida
Route::get('/nida/citizen/{id}', 'CitizenController@searchCitizen');
Route::get('/nida/citizens', 'CitizenController@index');

//Minaloc
Route::get('/minaloc/citizen/info/{id}', 'CitizenController@searchCitizenMinaloc');
Route::get('/minaloc/citizen/info', 'CitizenController@index');

//IDTemporaryRecovery
Route::get('/nida/temporary_ID_license/{id}', 'RecoveryController@searchRecoveryID');
Route::get('/nida/temporary_ID_license', 'RecoveryController@index');

//Driving_Temporary_License
Route::get('/rura/drive_temporary_permit/{id}', 'DriveTemporaryController@userLostPermitByID');
Route::get('/rura/drive_temporary_permit', 'DriveTemporaryController@listlostpermit');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
