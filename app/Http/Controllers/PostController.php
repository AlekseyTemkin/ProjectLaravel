<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showindex()
    {
    	return view('index');
    }
    public function showblog()
    {
    	return view('blog');
    }
    public function showabout()
    {
    	return view('about');
    }
    public function showlocation()
    {
    	return view('location');
    }
     public function showproject()
    {
    	return view('project');
    }
     public function showservices()
    {
    	return view('services');
    }
     public function showcontact()
    {
    	return view('contact');
    }
}
