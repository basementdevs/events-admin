@props([
    'span' => '',
    'title' => '',
    'description' => '',
    'width' => '760px'
])

<div class="md:w-[{{ $width }}] mx-auto space-y-4">
    <span class="text-[#7B5AFF] text-sm font-bold font-secondary">{{ $span }}</span>
    <h1 class="text-text-high text-5xl font-bold font-secondary first-letter:uppercase">{{ $title }}</h1>
    <p class="text-text-medium font-primary font-semibold leading-5">{{ $description }}</p>
    {{ $slot }}
</div>
