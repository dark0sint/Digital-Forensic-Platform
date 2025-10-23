<?php
namespace App\Http\Controllers;

use App\Models\Case;
use Illuminate\Http\Request;

class CaseController extends Controller
{
    public function index()
    {
        $cases = Case::all();  // Ambil semua update informasi kasus
        return view('cases.index', compact('cases'));
    }

    public function store(Request $request)
    {
        // Simpan update baru, panggil API Golang jika perlu
        $case = Case::create($request->all());
        return redirect()->route('cases.index');
    }
}
