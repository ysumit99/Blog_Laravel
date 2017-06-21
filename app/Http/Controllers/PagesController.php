<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

	public function getIndex() {
		
		//return "Home";
		# process variable data or params
		#talk to the model
		#receive from the model
		#compile or process data from the model
		#pass that data to the correct view
		return view('pages/welcome');
	}

	public function getAbout() {

		$first = "Sumit";
		$last = "Yadav";

		$fullname = $first . " " . $last;
		$email = "ysumit99@gmail.com";
		$data = [];
		$data['email'] = $email;
		$data['fullname'] = $fullname;

		return view('pages/about')->withData($data);
	}

	public function getContact() {
		return view('pages/contact');
	}

	
 
}


?>