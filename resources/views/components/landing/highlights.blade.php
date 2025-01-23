<section class="md:h-[700px] w-full flex justify-center items-center flex-col relative py-12">
    <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/90 to-black to-95%"></div>
    <div class="h-full text-center container mx-auto relative z-10 flex flex-col gap-y-4 justify-center">
        <x-content-header
            :span="'O que você vai encontrar?'"
            :title="'Chega mais pra tu ficar mec'"
        />

        <div class="grid md:grid-cols-3 grid-cols-1 gap-8 text-text-high mt-8">
            @foreach ([1, 2, 3, 4] as $feature)
            <x-card class="h-48 flex flex-col justify-center" class="{{ in_array($loop->index, [1, 2]) ? 'md:col-span-2' : '' }}">
                <h3 class="text-text-high text-3xl font-bold font-secondary first-letter:uppercase">
                    Lorem Ipsum
                </h3>
                <p class="line-clamp-2">Ut harum quia doloremque ex in earum. Ad et voluptatibus consequatur. Sequi non omnis nulla numquam qui. Sapiente id quae qui sit voluptatem quis reprehenderit. Nihil aut voluptates nesciunt beatae.</p>
            </x-card>
            @endforeach
        </div>
</section>
