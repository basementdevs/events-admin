@props([
    'span' => '',
    'title' => '',
    'description' => '',
    'width' => '760px',
])

<div class="md:w-[{{ $width }}] mx-auto space-y-8">
    <span class="text-[#7B5AFF] text-md font-semibold font-secondary">{{ $span }}</span>
    <h1 class="text-text-high text-5xl font-bold font-secondary first-letter:uppercase">{{ $title }}</h1>
    <p class="text-text-medium font-primary font-medium leading-5">{{ $description }}</p>
    {{ $slot }}
</div>
