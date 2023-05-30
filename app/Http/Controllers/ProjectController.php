<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function store(Request $request)
    {
        $validate = $request->validate( [
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
            'github_url' => 'required',
            'start_date' => 'required',
            'finish_date' => 'required',
            'gambar' => 'required',
        ]);

        if($request->file('gambar')){

            $extension = $request->file('gambar')->getClientOriginalExtension();
            $name = random_int(000000000000, 1000000000000).'.'.$extension;
            $request->file('gambar')->storeAs('gambar', $name);
            $request['thumbnail'] = $name;
        }

        $request['github_url'] = 'https://github.com/iyasz/'.$request->github_url;

        Project::create($request->except('_token', 'gambar'));
        return redirect('/')->with('success-project', 'Data Berhasil Ditambah!');
    }

    public function delete($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();
        return redirect('/')->with('success-project', 'Data Berhasil Dihapus!');
    }
    
    public function update($id, Request $request)
    {
        $project = Project::findOrFail($id);

        $validate = $request->validate( [
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
            'github_url' => 'required',
            'start_date' => 'required',
            'finish_date' => 'required',
        ]);

        if($request->file('gambar')){
            $extension = $request->file('gambar')->getClientOriginalExtension();
            $name = random_int(000000000000, 1000000000000).'.'.$extension;
            $request->file('gambar')->storeAs('gambar', $name);
            $request['thumbnail'] = $name;
        }

        $request['github_url'] = 'https://github.com/iyasz/'.$request->github_url;

        $project->update($request->except('_token', 'gambar'));
        return redirect('/')->with('success-project', 'Data Berhasil Diubah!');
    }



    public function SearchValue($id)
    {
        $project = Project::findOrFail($id);
        return $project;
    }
}
