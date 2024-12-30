<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provinces;

class PetaController extends Controller
{
    public function index(){
        $list_provinsi = Provinces::all();
        return view('peta.index',[
            'list_provinsi' => $list_provinsi
        ]);
    }
}