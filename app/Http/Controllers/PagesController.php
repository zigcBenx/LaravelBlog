<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	//Start with type of request (get,post,...)
    public function getIndex() {
		return view('pages.welcome');
    }

    public function getAbout() {
    	$name = "Žiga Benko";
    	return view('pages.about',compact('name'));
    }

    public function getContact() {
    	return view('pages.contact');
    }
}
