<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg mx-3 rounded-lg">
                <div class="p-6 sm:px-20 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                    <div class="flex justify-between">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-white">
                            Buses
                        </h2>
                        <a href="" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Bus</a>
                    </div>

                    <!-- Card Section -->
                    <div class=" mx-auto">
                        <!-- Grid -->
                        <div class="grid sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-3 sm:gap-6">
                            @foreach($buses as $bus)
                                <!-- Card -->
                                <a class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-neutral-900 dark:border-neutral-800"
                                   href="{{ route('bus.show', $bus->id) }}"
                                >
                                    <div class="p-4 md:p-5">
                                        <div class="flex justify-between items-center">
                                            <div>
                                                <h3 class="group-hover:text-blue-600 font-semibold text-gray-800 dark:group-hover:text-neutral-400 dark:text-neutral-200">
                                                       {{ $bus->name }}
                                                </h3>
                                                <p class="text-sm text-gray-500 dark:text-neutral-500">
                                                    {{ $bus->starting_point }} - {{ $bus->destination }}
                                                </p>
                                            </div>
                                            <div class="ps-3">
                                                <svg class="flex-shrink-0 size-5 text-gray-800 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!-- End Card -->
                            @endforeach

                        </div>
                        <!-- End Grid -->
                    </div>
                    <!-- End Card Section -->
            </div>
        </div>
    </div>
</x-app-layout>
