<!-- resources/views/diaries/create.blade.php -->

@extends('layout')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-semibold mb-4">Create Diary and Add Meals</h1>
        <form action="{{ route('diaries.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
                <input type="date" name="date" id="date" class="mt-1 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md">
            </div>

            <div class="mb-4">
                <label for="type" class="block text-sm font-medium text-gray-700">Meal Type</label>
                <select name="type" id="type" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="breakfast">Breakfast</option>
                    <option value="lunch">Lunch</option>
                    <option value="dinner">Dinner</option>
                    <option value="snack">Snack</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Meal Name</label>
                <input type="text" name="name" id="name" class="mt-1 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md">
            </div>

            <div class="mb-4">
                <label for="calories" class="block text-sm font-medium text-gray-700">Calories</label>
                <input type="number" name="calories" id="calories" class="mt-1 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md">
            </div>

            <div>
                <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                    Create Diary and Add Meal
                </button>
            </div>
        </form>
    </div>
@endsection
