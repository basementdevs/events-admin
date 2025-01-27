@props([
    'items' => [],
])


<div class="relative overflow-hidden px-4">
    <div class="flex overflow-x-auto snap-x snap-mandatory scrollbar-hide -mx-4">

        @foreach ($items as $item)
            <div class="flex-none w-[90%] md:w-[45%] lg:w-[30%] snap-start px-2">
                {{ $slot }}
            </div>
        @endforeach
    </div>
</div>

<style>
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }

    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
</style>
