<section class="md:h-[400px] w-full flex justify-center items-center flex-col relative py-12">
    <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/90 to-black to-95%"></div>
    <div class="h-full text-center container mx-auto relative z-10 flex flex-col gap-y-4 justify-center">
        <x-content-header
            :span="'Apoiadores'"
            :title="'Aqueles que pagaram a tropa'"
        />

        <div class="grid md:grid-cols-3 gap-8 text-text-high mt-8">
            @foreach ([1, 2, 3] as $supporter)
            <x-card class="h-32" />
            @endforeach
        </div>
</section>
