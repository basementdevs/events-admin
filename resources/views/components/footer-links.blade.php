@props([
    'title' => '',
    'links' => [],
])

<div class="col-span-1">
    <span class="text-[#7B5AFF] text-md font-bold font-secondary">{{ $title }}</span>
    <div class="flex flex-col gap-2 mt-2">
        @foreach ($links as $link)
        <a>$link</a>
        @endforeach
    </div>
</div>
