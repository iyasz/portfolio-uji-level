<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class IndexController extends Controller
{
    public function index()
    {
        $author = User::first();
        $projectsAll = Project::all();
        return view('index', compact('author', 'projectsAll'));
    }
}
