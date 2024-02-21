@extends('layout')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-semibold mb-4">Diaries</h1>
        <div class="grid grid-cols-3 gap-4">
            @foreach($diaries as $diary)
                <div class="bg-white p-4 rounded shadow">
                    <p>Date: {{ $diary->date }}</p>
                    <a href="{{ route('diaries.show', $diary->id) }}" class="text-blue-500 hover:underline">View Details</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
