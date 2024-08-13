<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    // Menampilkan semua testimoni
    public function showtestimoni()
    {
        $testimonis = Testimoni::all();
        return view('testimoni', compact('testimonis'));
    }

    // Menyimpan testimoni baru
    public function savetestimoni(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required', // memastikan user_id valid dan ada di tabel users
            'ulasan' => 'nullable',
        ]);
 
        Testimoni::create($data);

        return redirect()->route('testimoni.store');
    }
}
