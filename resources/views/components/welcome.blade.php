<!-- Content -->
<div class="w-full">
    <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
        @if(auth()->user()->isAdmin())
        <div class="flex items-center justify-between">
            <h2 class="text-lg sm:text-xl font-semibold text-gray-800 dark:text-neutral-200">
                Overview
            </h2>
            <div class="flex items-center gap-2">
                <button class="flex items-center gap-1 text-sm text-gray-600 dark:text-neutral-300 hover:text-gray-800 dark:hover:text-neutral-200">
                    <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" y1="8" x2="12" y2="16"></line>
                        <line x1="8" y1="12" x2="16" y2="12"></line>
                    </svg>
                    <span>
                        Filter
                    </span>
                </button>
                <button class="flex items-center gap-1 text-sm text-gray-600 dark:text-neutral-300 hover:text-gray-800 dark:hover:text-neutral-200">
                    <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" y1="8" x2="12" y2="16"></line>
                        <line x1="8" y1="12" x2="16" y2="12"></line>
                    </svg>
                    <span>
                        Export
                    </span>
                </button>

            </div>
        </div>
        <!-- Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
            <!-- Card -->
            <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
                <div class="p-4 md:p-5">
                    <div class="flex items-center gap-x-2">
                        <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                            Total users
                        </p>
                        <div class="hs-tooltip">
                            <div class="hs-tooltip-toggle">
                                <svg class="flex-shrink-0 size-4 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg>
                                <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm dark:bg-neutral-700" role="tooltip">
                  The number of users
                </span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-1 flex items-center gap-x-2 text-gray-800 dark:text-neutral-200">
                        <h3 class="text-xl sm:text-2xl font-medium">
                            {{ \App\Models\User::count() }}
                        </h3>
                        Users
                    </div>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
                <div class="p-4 md:p-5">
                    <div class="flex items-center gap-x-2">
                        <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                            Buses
                        </p>
                    </div>

                    <div class="mt-1 flex items-center gap-x-2">
                        <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                            {{ \App\Models\Bus::count() }}
                        </h3>
                    </div>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
                <div class="p-4 md:p-5">
                    <div class="flex items-center gap-x-2">
                        <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                            Total Logs
                        </p>
                    </div>

                    <div class="mt-1 flex items-center gap-x-2">
                        <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                            {{ \App\Models\LocationLog::count() }}
                        </h3>
                    </div>
                </div>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Grid -->
       @else

            <!-- Card Section -->
            <div class="max-w-5xl  py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                <h2 class="text-2xl sm:text-3xl font-semibold text-gray-800 dark:text-neutral-200">
                    Welcome to Bus Tracking System
                </h2>
                <p class="mt-1 text-gray-500 dark:text-neutral-500">
                    We're always here to help. If you can't find the answer you need, feel free to reach out to us.
                </p>

                <!-- Grid -->
                <div class="mt-8 grid sm:grid-cols-2 lg:grid-cols-3 gap-3 sm:gap-6">
                    <!-- Card -->
                    <a class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-neutral-900 dark:border-neutral-800" href="#">
                        <div class="p-4 md:p-5">
                            <div class="flex">
                                <svg class="mt-1 flex-shrink-0 size-5 text-gray-800 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>

                                <div class="grow ms-5">
                                    <h3 class="group-hover:text-blue-600 font-semibold text-gray-800 dark:group-hover:text-neutral-400 dark:text-neutral-200">
                                       Live Track Your Bus
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-neutral-500">
                                        Track your bus in real-time
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- End Card -->

                    <!-- Card -->
                    <a class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-neutral-900 dark:border-neutral-800" href="#">
                        <div class="p-4 md:p-5">
                            <div class="flex">
                                <svg class="mt-1 flex-shrink-0 size-5 text-gray-800 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg>

                                <div class="grow ms-5">
                                    <h3 class="group-hover:text-blue-600 font-semibold text-gray-800 dark:group-hover:text-neutral-400 dark:text-neutral-200">
                                        Consistent Updates
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-neutral-500">
                                        Get consistent updates on your bus
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- End Card -->

                    <!-- Card -->
                    <a class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-neutral-900 dark:border-neutral-800" href="#">
                        <div class="p-4 md:p-5">
                            <div class="flex">
                                <svg class="mt-1 flex-shrink-0 size-5 text-gray-800 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.2 8.4c.5.38.8.97.8 1.6v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V10a2 2 0 0 1 .8-1.6l8-6a2 2 0 0 1 2.4 0l8 6Z"/><path d="m22 10-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 10"/></svg>

                                <div class="grow ms-5">
                                    <h3 class="group-hover:text-blue-600 font-semibold text-gray-800 dark:group-hover:text-neutral-400 dark:text-neutral-200">
                                        Contact Us
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-neutral-500">
                                        Reach us at <span class="text-blue-600 decoration-2 group-hover:underline font-medium dark:text-blue-500">info@site.com</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
                <!-- End Grid -->
            </div>
            <!-- End Card Section -->

        @endif


    </div>
</div>
<!-- End Content -->
