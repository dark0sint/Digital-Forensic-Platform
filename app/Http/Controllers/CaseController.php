<?php

namespace App\Http\Controllers;

use App\Models\Case;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CaseController extends Controller
{
    public function index()
    {
        // Ambil data dari API Golang jika diperlukan, atau dari database
        $response = Http::get('http://localhost:8080/api/cases');
        $cases = $response->json();
        return view('cases.index', compact('cases'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        // Simpan ke database Laravel
        Case::create($request->all());

        // Kirim ke API Golang untuk sinkronisasi
        Http::post('http://localhost:8080/api/cases', $request->all());

        return redirect()->route('cases.index');
    }
}
