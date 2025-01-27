@php
    $faqs = [
        [
            'title' => 'Lorem ipsum dolor sit amet?',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat.',
        ],
        [
            'title' => 'Lorem ipsum dolor sit ame?',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat.',
        ],
        [
            'title' => 'Lorem ipsum dolor sit at?',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat.',
        ],
        [
            'title' => 'Lorem ipsum dolor smet?',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat.',
        ],
    ];
@endphp


<section class="container mx-auto grid grid-cols-1 md:grid-cols-2 p-4 md:p-8">
    <div class="bg-elevation-01dp border-l border-helper-outline rounded-t-3xl md:rounded-r-none  p-8">
        <h2 class="text-xl md:text-xxl font-semibold font-secondary text-text-high mb-4">Entrar em contato</h2>
        <p class="md:text-sm text-base text-text-medium italic mb-8">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam urna tellus, cursus vitae vestibulum quis,
            pretium eu dui.
        </p>

        <form class="space-y-6 md:space-y-9">
            <div>
                <label class="text-text-high block mb-2 font-primary font-medium text-xs">Name</label>
                <input type="text" placeholder="First name"
                    class="w-full bg-elevation-01dp border border-helper-outline rounded p-2 text-text-medium">
            </div>

            <div>
                <label class="text-text-high block mb-2 font-primary font-medium text-xs">Email</label>
                <input type="email" placeholder="First name"
                    class="w-full bg-elevation-01dp border border-helper-outline rounded p-2 text-icon-medium font-primary font-medium text-xs">
            </div>

            <div>
                <label class="text-text-high block mb-2 font-primary font-medium text-xs">Mensagem</label>
                <textarea placeholder="Mensagem..." rows="4"
                    class="w-full bg-elevation-01dp border border-helper-outline rounded p-2 text-icon-medium font-primary font-medium text-xs"></textarea>
            </div>

            <div class="flex justify-end">
                <button
                    class="bg-[#7B5AFF] text-white py-2 md:py-3 px-4 w-full md:w-[220px] rounded flex justify-center font-button font-bold">
                    Enviar
                </button>
            </div>
        </form>
    </div>

    <div class="bg-[#7B5AFF] rounded-b-3xl md:rounded-b-none md:rounded-r-3xl p-8 border-r border-helper-outline">
        <h2 class="text-xl md:text-xxl font-semibold font-secondary text-text-high mb-4">FAQ</h2>
        <p class="md:text-sm text-base text-white italic mb-8">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam urna tellus, cursus vitae vestibulum quis,
            pretium eu dui.
        </p>

        <div class="">
            @foreach ($faqs as $faq)
                <x-accordion :key="$faq['title']" :title="$faq['title']" :description="$faq['description']" />
            @endforeach
        </div>
    </div>
</section>
