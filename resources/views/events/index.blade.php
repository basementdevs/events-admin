<x-app-layout>
    <div class="flex flex-col items-center " id="current_event">
        <div>
            <h3 class="text-3xl font-bold text-gray-900 dark:text-white">Current Event</h3>
            <div href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-4xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover w-full rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="https://http.cat/200" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $activeEvent->title }}</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $activeEvent->description }}</p>
                    <div class="flex flex-row gap-4">
                        <span class="text-sm font-semibold text-gray-900 dark:text-white">Starts: {{ $activeEvent->start_at->format('Y-m-d H:i:s') }}</span>
                        <span class="text-sm font-semibold text-gray-900 dark:text-white">Ends: {{ $activeEvent->end_at }}</span>
                        <span class="text-sm font-semibold text-gray-900 dark:text-white">Location: {{ $activeEvent->location }}</span>
                        <a href="{{ route('events.show', ['event' => $activeEvent]) }}" class=" text-sm font-semibold text-blue-600 dark:text-blue-400 hover:underline">View Event</a>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <h3 class="text-3xl font-bold text-gray-900 dark:text-white">Past Events</h3>
            @foreach($pastEvents as $event)
            <div href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-4xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover w-full rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="https://http.cat/200" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $event->title }}</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $event->description }}</p>
                    <div class="flex flex-row gap-4">
                        <span class="text-sm font-semibold text-gray-900 dark:text-white">Starts: {{ $event->start_at->format('Y-m-d H:i:s') }}</span>
                        <span class="text-sm font-semibold text-gray-900 dark:text-white">Ends: {{ $event->end_at }}</span>
                        <span class="text-sm font-semibold text-gray-900 dark:text-white">Location: {{ $event->location }}</span>
                        <a href="{{ route('events.show', ['event' => $event]) }}" class=" text-sm font-semibold text-blue-600 dark:text-blue-400 hover:underline">View Event</a>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="flex mt-5 items-center flex-col">
            {{ $pastEvents->links() }}
            </div>

        </div>
    </div>



</x-app-layout>
