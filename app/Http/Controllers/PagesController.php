<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        // $title = 'Welcome to Laravel_app';
        // return view('pages.index', compact('title'));
        // return view'pages.index')->with('title', $title);
        return view('pages.index');
    }

    public function about(){
        $title = 'About Me';
        return view('pages.about')->with('title', $title);
    }

    public function contact(){
        return view('pages.contact');
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }

    Public function contactme(){
        return view('posts.create_contactme');
    }

    public function edit_contactme(){
        return view('posts.edit_contactme');
    }
    
    public function deletedposts(){
        return view('posts.deletedposts');
    }
}
