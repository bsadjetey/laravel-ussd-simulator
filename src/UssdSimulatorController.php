<?php

namespace Bsadjetey\UssdSimulator;

use App\Http\Controllers\Controller;

class UssdSimulatorController extends Controller
{

    public function index(){
        return view('bsadjetey.ussdsimulator.index');
    }

    public function settings(){
        return view("bsadjetey.ussdsimulator.settings");
    }
}
