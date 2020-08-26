<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

class countryController extends Controller
{
    public function index(){
    	$countries = Country::all();
    	return view('front.country', compact('countries'));
    }

    public function create(){
    	return view('front.country.create');
    }

    public function store(){
    	$name = request('name');
    	$capital = request('capital');
    	$currence = request('currence');
    	$population = request('population');

    	/*Country::create([
    		'name' => '$name',
    		'capital' => '$capital',
    		'currence' => '$currence',
    		'population' => '$population'
    		]);*/

    	// 2nd system
    	$country = new Country();
    	$country->name = $name;
    	$country->capital = $capital;
    	$country->currence = $currence;
    	$country->population = $population;
    	
    	$country->save();

    	return back();
    }

    public function update(){
    	return view('front.country.update');
    }

    public function details(){
    	return view('front.country.details');
    }
}
