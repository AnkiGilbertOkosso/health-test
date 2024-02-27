<x-app-layout>
<div>
    <h1>Exercise</h1>

    <!-- Search Form -->
    <form wire:submit.prevent="search">
        <input type="text" wire:model="muscle" placeholder="Search exercise...">
        <button type="submit">Search</button>
    </form>

    <!-- Search Results -->
    @if($data)
        <ul>
            @foreach($data as $item)
                <li> calories burned</li>
            @endforeach
        </ul>
    @endif

    <!-- Create Form -->
    <form wire:submit.prevent="save">
        <input type="text" wire:model="exercise_name" placeholder="Exercise name">
        <input type="number" wire:model="calories_burned" placeholder="Calories burned">
        <input type="date" wire:model="performed_at">
        <button type="submit">Save</button>
    </form>
</div>
</x-app-layout>
