@props([
'data' => [[ 'speaker' => null, 'action' => false ], ['speaker' => 'John Doe', 'action' => false ], ['speaker' => 'Jane Doe', 'action' => true ]],
])

<div class="timeline-wrapper text-text-high container m-auto">
    <div class="text-center">
        <x-content-header span="Tech talk's" title="Grade do evento" />
    </div>

    @foreach($data as $item)
    <div class="timeline flex items-center relative">
        @if (!$loop->last)
        <div class="absolute w-full h-[70%] border-s border-gray-500 left-5 -bottom-10"></div>
        @endif
        <div class="timeline-time w-12">
            00:00
        </div>
        <div class="flex gap-4 items-center grow border rounded-sm border-gray-700 w-full p-4 m-4 mr-0 min-h-[86px]">
            <div class="flex grow gap-4 ml-4">
                @if ($item['speaker'])
                <img src="{{ asset('/assets/speaker.png') }}" class="size-12 rounded-[50%] bg-neutral-800" />
                <div class="flex flex-col">
                    <span>Início</span>
                    <h4 class="font-bold">{{ $item['speaker'] ? $item['speaker'] : 'To be decided' }}</h4>
                </div>
                @else
                <h4 class="text-text-medium font-bold">{{ $item['speaker'] ? $item['speaker'] : 'To be decided' }}</h4>
                @endif
            </div>
            @if ($item['action'])
            <button class="bg-[#7B5AFF] text-white px-6 py-2 w-min md:w-auto rounded-[8px]">
                Como chegar?
            </button>
            @else
            <div class="flex">
                <span class="text-text-medium">40m</span>
            </div>
            @endif
        </div>
    </div>
    @endforeach
</div>
