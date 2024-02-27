<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\FoodIntake;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class CalorieController extends Controller
{
    public function setGoal(Request $request)
    {
        // Validate the request
        $request->validate([
            'calorie_goal' => 'required|integer|min:0',
        ]);

        // Get the authenticated user
        $user = Auth::user();

        // Update the user's calorie goal
        $user->calorie_goal = $request->calorie_goal;
        $user->save();

        return redirect()->back()->with('success', 'Calorie goal set successfully!');
    }

    public function calculateNetCalories()
    {
        $user = Auth::user();
        $totalCaloriesConsumed = FoodIntake::where('user_id', $user->id)->sum('calories_consumed');
        $totalCaloriesBurned = Exercise::where('user_id', $user->id)->sum('calories_burned');
        $netCalories = $totalCaloriesConsumed - $totalCaloriesBurned;

        return redirect()->back()->compact('netCalories');
    }
}
