<section class="md:h-[600px] w-full flex items-center flex-col">
    <div class="h-full text-center container mx-auto relative z-10 flex flex-col gap-y-4">
        <x-content-header :span="'Palestrantes'" :title="'Os nerds que vão falar'" />

        <div class="glider grid md:grid-cols-3 gap-8 text-text-high mt-8">
            @foreach ([1, 2, 3] as $speaker)
                <x-card>
                    <div class="flex justify-center w-full mb-5">
                        <img src="{{ asset('/assets/speaker.png') }}" class="size-24 bg-neutral-700 rounded-full" />
                    </div>
                    <h3 class="text-text-high text-3xl font-bold font-secondary first-letter:uppercase mt-2">Nome</h3>
                    <span class="text-[#7B5AFF] text-sm font-bold font-secondary">Apoiadores</span>
                    <p class="line-clamp-3 mt-3">Ut harum quia doloremque ex in earum. Ad et voluptatibus consequatur.
                        Sequi non omnis nulla numquam qui. Sapiente id quae qui sit voluptatem quis reprehenderit. Nihil
                        aut voluptates nesciunt beatae.</p>
                </x-card>
            @endforeach
        </div>
</section>
