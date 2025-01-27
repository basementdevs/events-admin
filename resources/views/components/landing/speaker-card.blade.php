@props([
    'name' => '',
    'role' => '',
    'description' => '',
    'image' => '',
    'linkedin' => '',
    'twitter' => '',
    'instagram' => '',
])

<x-card class="border border-helper-outline">
    <div class="flex justify-between md:flex-row flex-col items-center text-center md:text-left">
        <div class="flex justify-center items-center md:mb-0 mb-8">
            <img src="{{ $image }}" class="size-20 bg-neutral-700 rounded-full border border-helper-outline" />
        </div>
        <div class="flex flex-col w-2/3 justify-center gap-y-1 items-center md:items-start">
            <h3 class="text-text-high text-2xl font-semibold font-secondary  first-letter:uppercase ">
                {{ $name }}
            </h3>
            <span class="text-[#7B5AFF]  font-bold font-secondary">{{ $role }}</span>
            <p class="line-clamp-3 font-primary font-medium text-text-medium">
                {{ $description }}
            </p>
        </div>

        <div class="flex flex-row md:gap-5 gap-x-14 items-center md:flex-col mt-4 md:mt-0">
            <a href="{{ $linkedin }}"
                class="text-text-high text-sm font-bold font-secondary first-letter:uppercase mt-2 ">
                <x-linkedin-logo class="size-8 md:size-6 fill-white md:fill-icon-medium" />
            </a>
            <a href="{{ $twitter }}"
                class="text-text-high text-sm font-bold font-secondary first-letter:uppercase mt-2">
                <x-twitter-logo class="size-8 md:size-6 fill-white md:fill-icon-medium" />
            </a>
            <a href="{{ $instagram }}"
                class="text-text-high text-sm font-bold font-secondary first-letter:uppercase mt-2">
                <x-instagram-logo class="size-8 md:size-6 fill-white md:fill-icon-medium" />
            </a>
        </div>
    </div>
</x-card>
