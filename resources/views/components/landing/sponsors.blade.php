<section class="md:h-[400px] w-full flex items-center flex-col pt-48 md:pt-0">
    <div class="h-full text-center container mx-auto relative z-10 flex flex-col gap-y-4">
        <x-content-header :span="'Apoiadores'" :title="'Aqueles que pagaram a tropa'" />
        <div class="md:grid md:grid-cols-3 gap-8 text-text-high mt-8 hidden">
            @foreach ([1, 2, 3] as $supporter)
                <x-card class="h-32" />
            @endforeach
        </div>
        <div class='block md:hidden'>
            <x-caroussel :items="[1, 2, 3]">
                <x-card class="h-32" />
            </x-caroussel>
        </div>
    </div>
</section>
