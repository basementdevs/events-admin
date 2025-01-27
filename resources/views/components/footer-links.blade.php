@props([
    'title' => '',
    'links' => [],
])

<div class="col-span-1">
    <span class="text-white text-sm font-semibold  font-secondary uppercase">{{ $title }}</span>
    <div class="flex flex-col gap-2 mt-2">
        @foreach ($links as $link)
            <a class="text-text-medium font-primary font-medium text-xs leading-5" target="_blank"
                href="{{ $link['url'] }}">
                {{ $link['title'] }}
            </a>
        @endforeach
    </div>
</div>
