<div class="flex flex-col col-span-full sm:col-span-6 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
    <!-- Header -->
    <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700 flex items-center">
        <h2 class="font-semibold text-slate-800 dark:text-slate-100">Calorie Goal Tracker</h2>
    </header>

    <!-- Content -->
    <div class="px-5 py-3">
        <!-- Form to set calorie goal -->
        <form action="{{ route('calorie.goal') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="calorie_goal" class="block text-gray-700 dark:text-slate-100 text-sm font-bold mb-2">Set Your Calorie Goal:</label>
                <input type="number" id="calorie_goal" name="calorie_goal" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter calorie goal" required>
            </div>
            <div class="flex items-center justify-end">
                <button type="submit" class="text-white bg-gradient-to-r from-purple-700 to-purple-800 hover:to-purple-900 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Set Goal</button>
            </div>
        </form>
    </div>

    <!-- Goal Display -->
    <div class="px-5 py-3">
        <div class="flex items-start">
            <div class="text-3xl font-bold text-slate-800 dark:text-slate-100 mr-2 tabular-nums">{{ Auth::user()->calorie_goal }}</div>
            <div id="dashboard-card-05-deviation" class="text-sm font-semibold text-white px-1.5 rounded-full"></div>
        </div>
    </div>

    <!-- Grow -->
    <div class="grow"></div>
</div>
