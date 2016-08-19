<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SiteCon extends Controller
{
    //index function test
    public Function index()
    {
	return view('welcome');
    }

}
