<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FlyersController extends Controller
{
   public function index()
   {
   	//
   }
   public function create()
   {
   	return view('flyers.create');
   }
}