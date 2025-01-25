<section class="md:h-[400px] w-full flex items-center flex-col">
    <div class="h-full text-center container mx-auto relative z-10 flex flex-col gap-y-4">
        <x-content-header :span="'Apoiadores'" :title="'Aqueles que pagaram a tropa'" />
        <div class="grid md:grid-cols-3 gap-8 text-text-high mt-8">
            @foreach ([1, 2, 3] as $supporter)
                <x-card class="h-32" />
            @endforeach
        </div>
</section>
