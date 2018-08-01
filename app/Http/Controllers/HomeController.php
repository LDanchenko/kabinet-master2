<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller {
	public function __construct() {
		// $this->middleware('auth'); //убрали логин
	}

	public function index( Request $request ) {


		return view( 'home');
	}

	//тут какой то id человека?
    public function show(  ) {


        return view( 'teacher.schedule');
    }

}


