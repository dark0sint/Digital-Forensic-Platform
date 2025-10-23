<?php

namespace App\Http\Controllers;

use App\Models\PressRelease;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PressReleaseController extends Controller
{
    public function create()
    {
        return view('press-releases.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
        ]);

        PressRelease::create($request->all());
        Http::post('http://localhost:8080/api/press-releases', $request->all());

        return redirect()->route('press-releases.create');
    }
}
