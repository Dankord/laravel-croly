<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index() {
        return view("pages.home");
    }
    public function about() {
        $title = "About us";
        return view('pages.services.about', compact('title'));
    }
    public function services() {
        $data = array(
            'title' => 'Services',
            'services' => ["Web design", "AI engineering", "Web development"]
        );
        return view("pages.services.services")->with($data);
    }
}
