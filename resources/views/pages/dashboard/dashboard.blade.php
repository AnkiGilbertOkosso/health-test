<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <!-- Welcome banner -->
        <x-dashboard.welcome-banner />

        <!-- Dashboard actions -->
        <div class="sm:flex sm:justify-between sm:items-center mb-8">

            <!-- Left: Avatars -->
            {{-- <x-dashboard.dashboard-avatars /> --}}
            <h1 class="text-4xl font-black text-gray-950 mb-2">Summary</h1>

            <!-- Right: Actions -->
            <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">

                <!-- Filter button -->
                <x-dropdown-filter align="right" />

                <!-- Datepicker built with flatpickr -->
                <x-datepicker />

                <!-- Add view button -->
                <button class="btn text-white bg-gradient-to-r from-purple-700 to-purple-800 hover:to-purple-900 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-gradient-to-r dark:from-purple-600 dark:to-purple-700 dark:hover:from-purple-700 dark:hover:to-purple-800 focus:outline-none dark:focus:ring-purple-800">
                    <svg class="w-4 h-4 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                        <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                    </svg>
                    <span class="hidden xs:block ml-2">Add View</span>
                </button>
                
            </div>

        </div>
        
        <!-- Cards -->
        <div class="grid grid-cols-12 gap-6">

            <div class="col-span-full text-center bg-white dark:bg-slate-800 shadow-lg py-24 rounded-sm border border-slate-200 dark:border-slate-700">No activity yet</div>

            <!-- Medication -->
            <x-dashboard.dashboard-card-00 />
            
            {{-- <!-- Line chart (Acme Plus) -->
            <x-dashboard.dashboard-card-01 :dataFeed="$dataFeed" />

            <!-- Line chart (Acme Advanced) -->
            <x-dashboard.dashboard-card-02 :dataFeed="$dataFeed" />

            <!-- Line chart (Acme Professional) -->
            <x-dashboard.dashboard-card-03 :dataFeed="$dataFeed" />

            <!-- Bar chart (Direct vs Indirect) -->
            <x-dashboard.dashboard-card-04 />

            <!-- Line chart (Real Time Value) -->
            <x-dashboard.dashboard-card-05 />

            <!-- Doughnut chart (Top Countries) -->
            <x-dashboard.dashboard-card-06 />

            <!-- Table (Top Channels) -->
            <x-dashboard.dashboard-card-07 />

            <!-- Line chart (Sales Over Time)  -->
            <x-dashboard.dashboard-card-08 />

            <!-- Stacked bar chart (Sales VS Refunds) -->
            <x-dashboard.dashboard-card-09 />

            <!-- Card (Customers)  -->
            <x-dashboard.dashboard-card-10 />

            <!-- Card (Reasons for Refunds)   -->
            <x-dashboard.dashboard-card-11 />             

            <!-- Card (Recent Activity) -->
            <x-dashboard.dashboard-card-12 />
            
            <!-- Card (Income/Expenses) -->
            <x-dashboard.dashboard-card-13 />    --}}

        </div>

    </div>
</x-app-layout>
