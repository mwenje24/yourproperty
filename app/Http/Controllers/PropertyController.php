<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\property;

class PropertyController extends Controller
{
    public function index(){
        return view('property.index',[
            'property' => Property::all()
        ]);
    }

    public function show(Property $property){
        return view('property.categorized',[
            'property' => $property
        ]);
    }
}
