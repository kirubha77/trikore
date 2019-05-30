<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteFrontController extends Controller
{
	public function index(){
	    return view('home');
	}

	public function elements(){
	    return view('elements');
	}

	public function aboutUs(){
		return view('about_us');
	}

	public function services(){
		return view('services');
	}

	public function websiteDevelopment(Request $request){
		return view('websiteDevelopment');
	}

	public function eCommerce(){
		return view('e_commerce');
	}

	public function digitalMarketing(){
		return view('digital_marketing');
	}

	public function portfolio(){
		return view('portfolio');
	}

	public function testimonals(){
		return view('testimonals');
	}

	public function contact_us(){
		return view('contact_us');
	}

	public function request_a_quote(){
		return view('request_a_quote');
	}
}
