<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Person;

class countryController extends Controller
{
    public function index(){
    	$countries = Country::all();
    	return view('front.country', compact('countries'));
    }

    public function create(){
    	return view('front.country.create');
    }

    //public function store(){ //first second use of get data
    public function store(Request $request){ //is use of third option of get data
    	//firest get data
    	//$name = request('name');
    	//$capital = request('capital');
    	//$currence = request('currence');
    	//$population = request('population');

    	//second get data 
    	//$name = request()->input('name');
    	//$capital = request()->input('capital');
    	//$currence = request()->input('currence');
    	//$population = request()->input('population');

    	//third get data 
    	//$name = $request->input('name');
    	//$capital = $request->input('capital');
    	//$currence = $request->input('currence');
    	//$population = $request->input('population');

    	//First approch data and need for it "protected $fillable = ['name', 'capital', 'currence', 'population'];" of Model file Country
    	/*Country::create([
    		'name' => $name,
    		'capital' => $capital,
    		'currence' => $currence,
    		'population' => $population
    		]);*/

    	// 2nd approch data 
    	//$country = new Country();
    	//$country->name = $name;
    	//$country->capital = $capital;
    	//$country->currence = $currence;
    	//$country->population = $population;
    	
    	//$country->save();


    	// 3rd approch data
    	//Country::create($request->all()); must use of model protected file 
    	Country::create($request->only('name', 'capital', 'currence', 'population'));


    	//return back();
    	return redirect('/');
    }

    public function detail($id){
        //$country = Country::where('id', $id)->first();
        $country = Country::find($id);
        //$country_person = Person::where('id', $country->id)->get();
    	//return view('front.country.detail', compact('country', 'country_person'));
        return view('front.country.detail', compact('country'));
    }

    public function edit(Country $country){//Route model binding
       // $country = Country::find($id);
    	return view('front.country.edit', compact('country'));
    }



    public function update($id){
        $country = Country::find($id);

        $name = request('name');
        $capital = request('capital');
        $currence = request('currence');
        $population = request('population');

       /* $country->name = $name;
        $country->capital = $capital;
        $country->currence = $currence;
        $country->population = $population;

        $country->save();
        or
        */

        $country->update([
            'name' => $name,
            'capital' => $capital,
            'currence' => $currence,
            'population' => $population

        ]);

    	return redirect('/countries');
    }

    public function destroy($id){
        $country = Country::find($id);
        
        $name = request('name');
        $capital = request('capital');
        $currence = request('currence');
        $population = request('population');

        $country->delete();
        return back();
    }

}
