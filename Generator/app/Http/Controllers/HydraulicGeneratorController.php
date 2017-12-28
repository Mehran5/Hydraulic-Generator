<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HydraulicGeneratorController extends Controller
{
    public function hydraulic_generator_page(){
    	return view('hydraulic_generators');
    }

    public function technical_data_page(){
    	return view('technical_data');
    }

    public function installation_page(){
    	return view('installation');
    }

    public function information_page(){
    	return view('information');
    }

    public function contactus_page(){
        return view('contact_us');
    }

    public function aboutus_page(){
        return view('about_us');
    }

    public function meccaltealternators_page(){
        return view('meccalte_alternators');
    }

    public function news_page(){
        return view('news');
    }


}
