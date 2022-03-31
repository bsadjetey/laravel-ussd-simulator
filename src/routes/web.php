<?php

use Illuminate\Support\Facades\Route;

Route::get("/ussd",'Bsadjetey\UssdSimulator\UssdSimulatorController@index');
Route::get("/ussdsettings",'Bsadjetey\UssdSimulator\UssdSimulatorController@settings');
