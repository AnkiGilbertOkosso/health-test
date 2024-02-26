<div
    class="flex flex-col col-span-full sm:col-span-6 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
    <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700 flex items-center">
        <h2 class="font-semibold text-slate-800 dark:text-slate-100">Set Up Medication</h2>
        <div class="relative ml-2" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
            <button class="block" aria-haspopup="true" :aria-expanded="open" @focus="open = true"
                @focusout="open = false" @click.prevent>
                <svg class="w-4 h-4 fill-current text-slate-400 dark:text-slate-500" viewBox="0 0 16 16">
                    <path
                        d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z" />
                </svg>
            </button>
            <div class="z-10 absolute bottom-full left-1/2 -translate-x-1/2">
                <div class="bg-white dark:bg-slate-700 dark:text-slate-100 border border-slate-200 dark:border-slate-600 p-3 rounded shadow-lg overflow-hidden mb-2"
                    x-show="open" x-transition:enter="transition ease-out duration-200 transform"
                    x-transition:enter-start="opacity-0 translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-out duration-200" x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0" x-cloak>
                    <div class="text-xs text-center whitespace-nowrap">Track all your medication in one place</div>
                </div>
            </div>
        </div>
    </header>
    <div class="px-5 py-3">
        <div class="flex items-start">
            <div class="text-3xl font-bold text-slate-800 dark:text-slate-100 mr-2 tabular-nums"></div>
            <div id="dashboard-card-05-deviation" class="text-sm font-semibold text-white px-1.5 rounded-full"></div>
        </div>
    </div>
    <div class="grow">
    </div>
    <!-- Medication Modal -->
    <div x-show="openModal" @keydown.escape.window="openModal = false" class="fixed inset-0 overflow-y-auto z-50"
        x-cloak>
        <div class="flex items-center justify-center min-h-screen px-4">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true" x-show="openModal"
                x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>

            <!-- Modal -->
            <div class="bg-white rounded-lg shadow-xl transform transition-all max-w-lg w-full p-6" role="dialog"
                aria-modal="true" aria-labelledby="modal-headline" x-show="openModal" @click.away="openModal = false"
                x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4"
                x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-4">
                <h3 class="text-lg font-semibold mb-4">Add Medication</h3>
                <!-- Medication Form -->
                <form>
                    <!-- Medication Name Field -->
                    <div class="mb-4">
                        <label for="medication_name" class="block text-sm font-medium text-gray-700">Medication
                            Name</label>
                        <input type="text" id="medication_name" name="medication_name"
                            class="mt-1 p-2 block w-full rounded-md border border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <!-- Other Parameters Related to Medication -->
                    <!-- Add more fields as needed -->

                    <!-- Submit Button -->
                    <div class="flex justify-end">
                        <button type="submit"
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Add
                            Medication</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
