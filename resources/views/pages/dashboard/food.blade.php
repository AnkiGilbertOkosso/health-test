<x-app-layout>
    <div>
        <h1>Food Intake</h1>

        <!-- Search Form -->
        <form wire:submit.prevent="search">
            <input type="text" wire:model="query" placeholder="Search food...">
            <button type="submit">Search</button>
        </form>

        <!-- Search Results -->
        @if ($data)
            <ul>
                @foreach ($data as $item)
                    <li>{{ $item['name'] }} - {{ $item['calories'] }} calories</li>
                @endforeach
            </ul>
        @endif

        <!-- Create Form -->
        <form wire:submit.prevent="save">
            <input type="text" wire:model="food_name" placeholder="Food name">
            <input type="number" wire:model="calories_consumed" placeholder="Calories consumed">
            <input type="date" wire:model="consumed_at">
            <button type="submit">Save</button>
        </form>
    </div>
</x-app-layout>
