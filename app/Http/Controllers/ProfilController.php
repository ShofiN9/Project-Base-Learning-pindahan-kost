<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\flash;

class ProfilController extends Controller
{
    public function profil()
    {
        $users = User::all();
        return view('profil', compact('users'));
    }
    public function editProfil($id)
    {
        return view('profil');
    }
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'alamat' => 'nullable',
        ]); 
        $user = User::findOrFail($id);
        $user->update($data);

        return redirect()->route('profil')->with('success', 'Profile updated successfully.');   
    }  

}