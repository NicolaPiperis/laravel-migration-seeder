<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TrainPath;

class mainController extends Controller
{
    //
    public function index() {
        $train_paths = TrainPath :: all();
        return view('welcome', compact('train_paths'));
    }
}
