<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //
    public function contact() 	{
    	$name = 'Mike';
    	$location ='UK';

    return view('contact', compact('name','location'));	

    }
}
