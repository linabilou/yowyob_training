<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\formations as formationModel;

class FormationsController extends Controller
{
    //
    public function index(){
        // get all the formations
        $formations = formationModel::all();

        // load the view and pass the formations
        return view('front_end.formations',['formations' => $formations]);
    }
}
