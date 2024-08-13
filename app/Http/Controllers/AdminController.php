<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showadmin()
    {
        $users = User::all();
        return view('admin/dashboard_admin', compact('users'));
    }
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('update.dashboard_admin');

    }
    public function showtestimoniadmin()
    {
        $testimonis = Testimoni::all();
        return view('admin/testimoni_admin', compact('testimonis'));
    }
    public function destroytestimoni($id)
    {
        $testimoni = Testimoni::findOrFail($id);
        $testimoni->delete();
        return redirect()->route('update.testimoni_admin');

    }
  

}
