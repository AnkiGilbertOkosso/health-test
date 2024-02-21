<?php

namespace App\Http\Controllers;

use App\Models\Diary;
use Illuminate\Http\Request;

class DiaryController extends Controller
{
    public function index()
    {
        $diaries = auth()->user()->diaries()->get();
        return view('diaries.index', compact('diaries'));
    }

    public function create()
    {
        return view('diaries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date|unique:diaries,date,NULL,id,user_id,' . auth()->id(),
        ]);

        $diary = new Diary([
            'user_id' => auth()->id(),
            'date' => $request->input('date'),
        ]);
        $diary->save();

        return redirect()->route('diaries.index')->with('success', 'Diary created successfully.');
    }

    public function show($id)
    {
        $diary = Diary::findOrFail($id);
        $meals = $diary->meals;
        return view('diaries.show', compact('diary', 'meals'));
    }

    public function destroy($id)
    {
        $diary = Diary::findOrFail($id);
        $diary->delete();
        return redirect()->route('diaries.index')->with('success', 'Diary deleted successfully.');
    }
}
