<?php

namespace App\Http\Controllers;

use App\Person;
use App\Country;

use Illuminate\Http\Request;

class personController extends Controller
{
    public function index(){
    	$persons = Person::all();
    	return view('front.person.index', compact('persons'));
    }

    public function create(){
    	$countries = Country::all();
    	return view('front.person.create', compact('countries'));
    }

    public function store(){
    	Person::create([
    		'name' => request('name'),
    		'email' => request('email'),
    		'phone' => request('phone'),
    		'country_id' => request('country_id')
    	]);
    	return redirect('/persons');
    }
}
