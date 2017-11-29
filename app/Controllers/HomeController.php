<?php
    
    namespace App\Controllers;
    
    /**
    * 
    */
    class HomeController extends Controller
    {
    	
    	function __construct()
    	{
    					
    	}
    	public function index()
    	{
    		view('home.index');
    	}
    }