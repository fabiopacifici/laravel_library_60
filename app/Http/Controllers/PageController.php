<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $mydata = [
            'title' => 'My Library',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, molestias.'
        ];

        return view('home', $mydata);
    }

    public function about()
    {
         
            $title = 'About our Library';
            $description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, molestias.';
        
        return view('about', compact('title', 'description'));
    }

    public function contacts()
    {
            $title = 'Contact our Library';
            $description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, molestias.';
        
        return view('contacts', compact('title', 'description'));
    }
}
