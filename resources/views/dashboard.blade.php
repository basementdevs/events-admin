<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if($activeEvent)
                    <div>
                        <h3 class="text-3xl font-bold text-gray-900 dark:text-white">Current Event</h3>
                        <div href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row  hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                            <img class="object-cover w-full rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="https://http.cat/200" alt="">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $activeEvent->title }}</h5>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $activeEvent->description }}</p>
                                <div class="flex flex-row gap-4">
                                    <span class="text-sm font-semibold text-gray-900 dark:text-white">Starts: {{ $activeEvent->start_at->format('Y-m-d H:i:s') }}</span>
                                    <span class="text-sm font-semibold text-gray-900 dark:text-white">Ends: {{ $activeEvent->end_at }}</span>
                                    <span class="text-sm font-semibold text-gray-900 dark:text-white">Location: {{ $activeEvent->location }}</span>

                                    @if(!$isAttending)
                                        <form method="POST" action="{{ route('events.join', $activeEvent) }}">
                                            @csrf
                                            <button class="text-sm font-semibold text-blue-600 dark:text-blue-400 hover:underline">Attend</button>
                                        </form>
                                    @else
                                        <form method="POST" action="{{ route('events.leave', $activeEvent) }}">
                                            @csrf
                                            <button class="text-sm font-semibold text-blue-600 dark:text-blue-400 hover:underline">Leave</button>
                                        </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    @else
                        {{ "No active event" }}
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
