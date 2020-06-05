<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;
class GuestController extends Controller
{
    public function index($value='')
    {
    	return Data::select("image as img","name as title")->get();
    }
}
