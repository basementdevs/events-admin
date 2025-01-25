<section class="container mx-auto grid grid-cols-1 md:grid-cols-2 p-4 md:p-8">
    <div
        class="bg-elevation-01dp border-l border-helper-outline rounded-t-3xl md:rounded-r-none md:rounded-l-3xl p-4 md:p-8">
        <h2 class="text-xl md:text-xxl font-semibold font-secondary text-text-high mb-4">Entrar em contato</h2>
        <p class="text-sm md:text-base text-text-medium italic mb-8">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam urna tellus, cursus vitae vestibulum quis,
            pretium eu dui.
        </p>

        <form class="space-y-6 md:space-y-9">
            <div>
                <label class="text-text-high block mb-2">Name</label>
                <input type="text" placeholder="First name"
                    class="w-full bg-elevation-02dp border border-helper-outline rounded p-2 text-text-medium">
            </div>

            <div>
                <label class="text-text-high block mb-2">Email</label>
                <input type="email" placeholder="First name"
                    class="w-full bg-elevation-02dp border border-helper-outline rounded p-2 text-text-medium">
            </div>

            <div>
                <label class="text-text-high block mb-2">Mensagem</label>
                <textarea placeholder="Mensagem..." rows="4"
                    class="w-full bg-elevation-02dp border border-helper-outline rounded p-2 text-text-medium"></textarea>
            </div>

            <div class="flex justify-end">
                <button
                    class="bg-[#7B5AFF] text-white py-2 md:py-3 px-4 w-full md:w-[220px] rounded font-medium flex justify-center">
                    Enviar
                </button>
            </div>
        </form>
    </div>

    <div
        class="bg-[#7B5AFF] rounded-b-3xl md:rounded-b-none md:rounded-r-3xl p-4 md:p-8 border-r border-helper-outline">
        <h2 class="text-xl md:text-xxl font-semibold font-secondary text-text-high mb-4">FAQ</h2>
        <p class="text-sm md:text-base text-white italic mb-8">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam urna tellus, cursus vitae vestibulum quis,
            pretium eu dui.
        </p>

        <div class="space-y-4 md:space-y-8">
            @foreach (range(1, 5) as $index)
                <div class="border white:border-helper-outline rounded-sm p-2 md:p-3 text-white cursor-pointer">
                    <div class="flex justify-between items-center">
                        <span class="text-sm md:text-base">Lorem ipsum dolor sit amet</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 md:h-5 md:w-5" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
