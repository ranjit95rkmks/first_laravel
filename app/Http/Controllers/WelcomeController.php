<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        
        return view('frontEnd.home.homeContent');
    }
    public function category(){
        return view('frontEnd.category.categoryContent');
    }
    public function contact(){
        return view('frontEnd.contact.contactWith');
    }
    public function producDetails(){
        return view('frontEnd.product.productContent');
    }
}
