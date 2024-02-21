<?php

namespace App\Http\Controllers;

use App\Models\Diary;
use App\Models\Meal;
use Illuminate\Http\Request;

class MealController extends Controller
{
    public function index($diaryId)
    {
        $diary = Diary::findOrFail($diaryId);
        $meals = $diary->meals;
        return view('meals.index', compact('diary', 'meals'));
    }

    public function create($diaryId)
    {
        $diary = Diary::findOrFail($diaryId);
        return view('meals.create', compact('diary'));
    }

    public function store(Request $request, $diaryId)
    {
        $request->validate([
            'type' => 'required|in:breakfast,lunch,dinner,snack',
            'name' => 'required|string|max:255',
            'calories' => 'required|integer|min:0',
        ]);

        $meal = new Meal([
            'diary_id' => $diaryId,
            'type' => $request->input('type'),
            'name' => $request->input('name'),
            'calories' => $request->input('calories'),
        ]);
        $meal->save();

        return redirect()->route('diaries.meals.index', $diaryId)->with('success', 'Meal added successfully.');
    }

    public function destroy($diaryId, $mealId)
    {
        $meal = Meal::findOrFail($mealId);
        $meal->delete();
        return redirect()->route('diaries.meals.index', $diaryId)->with('success', 'Meal deleted successfully.');
    }
}
