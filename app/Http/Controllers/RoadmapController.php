<?php

namespace App\Http\Controllers;

use App\Models\Roadmap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RoadmapController extends Controller
{
    public function show($id)
    {
        $roadmap = Roadmap::findOrFail($id);
        return view('roadmaps.show', compact('roadmap'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'case_id' => 'required|integer',
            'steps' => 'required|array',
        ]);

        Roadmap::create($request->all());
        Http::post('http://localhost:8080/api/roadmaps', $request->all());

        return redirect()->back();
    }
}
