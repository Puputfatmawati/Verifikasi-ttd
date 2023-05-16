<?php

namespace App\Http\Controllers;
use App\models\EditorModel;
use Illuminate\Http\Request;

class EditorController extends Controller
{
    public function editor(){
        return view('v_editor');
    }
}
