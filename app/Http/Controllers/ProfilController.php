<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Users_detail;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function edit()
    {
        $author = User::first();
        return view('profil.index', compact('author'));
    }

    public function update($id, Request $request)
    {

        $validate = $request->validate( [
            'name' => 'required',
            'email' => 'required',
            'username' => 'required',
            'nickname' => 'required',
            ]);

        if($request->file('gambar')){

            $extension = $request->file('gambar')->getClientOriginalExtension();
            $name = random_int(000000000000, 1000000000000).'.'.$extension;
            $request->file('gambar')->storeAs('gambar', $name);
            $request['photo'] = $name;
        }

        if($request->pw){
            $request['password'] = password_hash($request->pw, PASSWORD_BCRYPT);
        }

        $author = User::findOrFail($id);


        $author->update($request->except('_token', 'gambar', 'pw'));

        return redirect('/my-profil')->with('success', 'Profil Berhasil Diubah!');
    }

    public function detail()
    {
        $author = User::first();
        return view('profil.detail', compact('author'));
    }

    public function detailUpdate($id, Request $request)
    {
        $validate = $request->validate( [
            'short_description' => 'required',
            'about' => 'required',
            'website_domain' => 'required',
            'instagram_id' => 'required',
            'email_address' => 'required',
        ]);

        $request['website_url'] = 'https://'.$request->website_domain;
        
        $request['instagram_url'] = 'https://instagram.com/'.$request->instagram_id;
        
        $request['email_url'] = 'mailto:'.$request->email_address;     
        
        if($request->city AND $request->country){
            $request['location'] = $request->city.', '.$request->country;
        }
    

        $author = Users_detail::findOrFail($id);

        $author->update($request->except('_token', 'city', 'country'));
        return redirect('/my-profil/detail')->with('success', 'Profil Berhasil Diubah!');
    }
}
