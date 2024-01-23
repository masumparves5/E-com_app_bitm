<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UniteController extends Controller
{
    public function index()
    {
        return view('admin.unite.index');
    }
    public function create()
    {
        return view('admin.unite.add');
    }
}
