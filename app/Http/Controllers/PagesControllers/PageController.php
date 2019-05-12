<?php

namespace App\Http\Controllers\PagesControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function main(){
    	return view('master');
    }
   
}
