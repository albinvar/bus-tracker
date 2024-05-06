<x-app-layout>

    <div class="flex justify-between items-center mb-4 p-5">
        <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">Bus Route</h2>
        <a href="{{ route('bus.location', ['bus' => $bus->id]) }}" class="flex items-center gap-x-1.5 px-3 py-1.5 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600">
            <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 14l-4-4 1.41-1.41L10 13.17l6.59-6.59L18 8l-8 8z"></path>
            </svg>
            <span>Live Location</span>
        </a>
    </div>

    <!-- Timeline -->
    <div class="mx-auto px-3">
        @foreach($bus->locationLogs as $log)
        <!-- Item -->
        <div class="flex gap-x-3">
            <!-- Left Content -->
            <div class="w-16 text-end">
                <span class="text-xs text-gray-500 dark:text-neutral-400">
                    {{ $log->created_at->format('H:i') }}
                </span>
            </div>
            <!-- End Left Content -->

            <!-- Icon -->
            <div class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-gray-200 dark:after:bg-neutral-700">
                <div class="relative z-10 size-7 flex justify-center items-center">
                    <div class="size-2 rounded-full bg-gray-400 dark:bg-neutral-600"></div>
                </div>
            </div>
            <!-- End Icon -->

            <!-- Right Content -->
            <div class="grow pt-0.5 pb-8">
                <h3 class="flex gap-x-1.5 font-semibold text-gray-800 dark:text-white">
                    <svg class="flex-shrink-0 size-4 mt-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="16" x2="8" y1="13" y2="13"></line>
                        <line x1="16" x2="8" y1="17" y2="17"></line>
                        <line x1="10" x2="8" y1="9" y2="9"></line>
                    </svg>
                    <span>{{ $log->location }}</span>
                </h3>
                <p class="mt-1 text-sm text-gray-600 dark:text-neutral-400">
                    {{ $log->address }}
                </p>
                <p class="mt-1 text-sm text-gray-600 dark:text-neutral-500">
                    Lat : {{ $log->latitude }}, Long : {{ $log->longitude }}
                </p>
            </div>
            <!-- End Right Content -->
        </div>
        <!-- End Item -->
        @endforeach
    </div>
    <!-- End Timeline -->

</x-app-layout>
