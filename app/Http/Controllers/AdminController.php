<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() {
        return view('admin.dashboard', [
            'navbar' => 'dashboard'
        ]);
    }

    
    public function kurs() {
        return view('admin.kurs', [
            'navbar' => 'kurs'
        ]);
    }

    
    public function doku() {
        return view('admin.doku', [
            'navbar' => 'doku'
        ]);
    }
}
