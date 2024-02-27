<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\FoodIntake;
use Illuminate\Support\Facades\Auth;

class FoodIntakeController extends Controller
{
    public function index()
    {
        $foodIntakes = FoodIntake::where('user_id', Auth::id())->get();
        return view('food_intakes.index', compact('foodIntakes'));
    }

    public function create(Request $request)
    {
        $query = $request->input('query');
        $response = Http::get('https://api.api-ninjas.com/v1/nutrition', ['query' => $query]);
        $data = $response->json();

        return view('food_intakes.create', compact('data', 'query'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'food_name' => 'required|string',
            'calories_consumed' => 'required|integer|min:0',
            'consumed_at' => 'required|date',
        ]);

        $user = Auth::user();
        $foodIntake = new FoodIntake([
            'user_id' => $user->id,
            'food_name' => $request->input('food_name'),
            'calories_consumed' => $request->input('calories_consumed'),
            'consumed_at' => $request->input('consumed_at'),
        ]);
        $foodIntake->save();

        return redirect()->route('food_intakes.index')->with('success', 'Food intake recorded successfully!');
    }
}
