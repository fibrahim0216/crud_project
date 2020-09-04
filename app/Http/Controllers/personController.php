<?php

namespace App\Http\Controllers;

use App\Person;

use Illuminate\Http\Request;

class personController extends Controller
{
    public function index(){
    	$persons = Person::all();
    	return view('front.person.index', compact('persons'));
    }
}
