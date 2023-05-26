<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class IndexController extends Controller
{
    public function index()
    {
        $author = User::first();
        return view('index', compact('author'));
    }
}
