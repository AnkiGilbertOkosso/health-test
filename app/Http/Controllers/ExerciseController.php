<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Exercise;
use Illuminate\Support\Facades\Auth;

class ExerciseController extends Controller
{
    public function index()
    {
        $exercises = Exercise::where('user_id', Auth::id())->get();
        return view('exercises.index', compact('exercises'));
    }

    public function fetchInsert()
    {
        $muscle = 'biceps';
        $apiUrl = 'https://api.api-ninjas.com/v1/exercises?muscle=' . $muscle;

        // $data = new Exercise();
        $response = Http::get($apiUrl, [
            'headers' => [
                'X-Api-Key' => 'htirf74aZCfN9r9ZLpow3Q==LOuQaS9T8wXUauTN',
                'Accept' => 'application/json',
            ],
        ]);

        if ($response->getStatusCode() === 200) {
            echo $response->getBody()->getContents();
        } else {
            echo "Error: " . $response->getStatusCode() . " " . $response->getBody()->getContents();
        }
        return $response;
    }

    public function show()
    {
        $data['exercise'] = Exercise::all();
        return view('pages.dashboard.exercise', $data);
    }

    public function create(Request $request)
    {
        $muscle = $request->input('muscle');
        $response = Http::get('https://api.api-ninjas.com/v1/exercises', ['muscle' => $muscle]);
        $data = $response->json();

        return view('pages.dashboard.exercise', compact('data', 'muscle'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'exercise_name' => 'required|string',
            'calories_burned' => 'required|integer|min:0',
            'performed_at' => 'required|date',
        ]);

        $user = Auth::user();
        $exercise = new Exercise([
            'user_id' => $user->id,
            'exercise_name' => $request->input('exercise_name'),
            'calories_burned' => $request->input('calories_burned'),
            'performed_at' => $request->input('performed_at'),
        ]);
        $exercise->save();

        return redirect()->route('pages.dashboard.exercise')->with('success', 'Exercise recorded successfully!');
    }
}
