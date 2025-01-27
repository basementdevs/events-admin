<section class="w-full flex items-center flex-col">
    <div class="h-full text-center container mx-auto relative z-10 flex flex-col gap-y-4">
        <x-content-header :span="'O que você vai encontrar?'" :title="'Chega mais pra tu ficar mec'" />

        <div class="md:grid md:grid-cols-3 grid-cols-1 gap-8 text-text-high mt-8 hidden">
            @foreach ([1, 2, 3, 4] as $feature)
                <x-card class="h-48 flex flex-col justify-center p-8 border border-helper-outline rounded-lg"
                    class="{{ in_array($loop->index, [1, 2]) ? 'md:col-span-2' : '' }}">
                    <h3 class="text-text-high text-3xl font-bold font-secondary first-letter:uppercase">
                        Lorem Ipsum
                    </h3>
                    <p class="line-clamp-2">Ut harum quia doloremque ex in earum. Ad et voluptatibus consequatur. Sequi
                        non omnis nulla numquam qui. Sapiente id quae qui sit voluptatem quis reprehenderit. Nihil aut
                        voluptates nesciunt beatae.</p>
                </x-card>
            @endforeach
        </div>
        <div class='block md:hidden'>
            <x-caroussel :items="[1, 2, 3, 4]">
                <x-card class="h-48 flex flex-col justify-center p-8 border border-helper-outline rounded-lg" />
            </x-caroussel>
        </div>
    </div>
</section>
