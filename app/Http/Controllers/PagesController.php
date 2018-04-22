<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome To Laravel';
        return view('pages.index', compact('title'));
    }

    public function about() {
        $data = array(
            'title' => 'About Us',
            'services' => ['Web Design', 'Programing', 'SEO']
        );
        return view('pages.about')->with($data);
    }

    public function services() {
        $title = 'Services';
        return view('pages.services')->with('title', $title);
    }
    
}
