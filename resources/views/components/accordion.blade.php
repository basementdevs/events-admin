@props(['title' => '', 'description' => ''])


<div x-data="{ open: false }" class="w-full border white:border-helper-outline first:rounded-t-xl last:rounded-b-xl">
    <button @click="open = !open" type="button" class="w-full p-2 md:p-3 text-white">
        <div class="flex justify-between items-center">
            <span class="text-base md:text-sm font-primary font-bold">{{ $title }}</span>
            <svg xmlns="http://www.w3.org/2000/svg"
                class="h-4 w-4 md:h-5 md:w-5 transform transition-transform duration-200" :class="{ 'rotate-180': open }"
                viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd" />
            </svg>
        </div>
    </button>

    <div x-show="open" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 transform -translate-y-2"
        x-transition:enter-end="opacity-100 transform translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 transform translate-y-0"
        x-transition:leave-end="opacity-0 transform -translate-y-2" class="p-4 text-text-medium">
        <p class="text-base md:text-sm font-primary text-text-high">
            {{ $description }}
        </p>
    </div>
</div>
