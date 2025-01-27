<section class="md:h-[400px] w-full flex container mx-auto">
    <div class="h-full flex flex-col gap-y-4">
        <div class="text-center">
            <x-content-header :span="'Convidados'" :title="'Os nerds que vão falar'" />
        </div>
        <div class="grid md:grid-cols-2 gap-8 text-text-high mt-8">
            @foreach ([1, 2] as $speaker)
                <x-landing.speaker-card :name="'Ramon Sucesso'" :role="'Professor'" :description="'Ut harum quia doloremque ex in earum. Ad et voluptatibus consequatur. '" :image="'https://i1.sndcdn.com/artworks-1Jba2R1TMUJlpzoE-X3QpTw-t500x500.jpg'"
                    :linkedin="'https://www.linkedin.com/in/ramon-sucesso'" :twitter="'https://twitter.com/ramon_sucesso'" :instagram="'https://www.instagram.com/ramon_sucesso'" />
            @endforeach
        </div>
    </div>
</section>
