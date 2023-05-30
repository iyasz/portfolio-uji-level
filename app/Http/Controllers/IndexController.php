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
        $projectsWeb = Project::where('category', 1)->get();
        $projectsApp = Project::where('category', 2)->get();
        $projectsDekstop = Project::where('category', 3)->get();
        return view('index', compact('author', 'projectsAll', 'projectsWeb', 'projectsApp', 'projectsDekstop'));
    }

    public function statusUpdate(Request $request, $id)
    {
        $author = User::findOrFail($id);
        $author->update($request->except('_token'));
        return redirect('/');
    }
    
}
