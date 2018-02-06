<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatagoryController extends Controller
{
    public function createCatagory(){
        return view('admin.catagory.addCatagory');
    }
    
    public function storeCatagory(Request $request){
        return $request->all();
        
    }
}
