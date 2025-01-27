@php
    $aboutUsLinks = [
        [
            'title' => 'Home',
            'url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
        ],
        [
            'title' => 'About us',
            'url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
        ],
    ];
    $supportLinks = [
        [
            'title' => 'Termos e Privacidade',
            'url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
        ],
        [
            'title' => 'Junte-se a nós',
            'url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
        ],
    ];
    $socialMediaLinks = [
        [
            'title' => 'Twitter',
            'url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
        ],
        [
            'title' => 'Instagram',
            'url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
        ],
        [
            'title' => 'Linkedin',
            'url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
        ],
    ];
@endphp


<footer class="bg-gradient-to-l from-elevation-01dp to-elevation-02dp p-12 text-text-high border border-helper-outline">
    <div class="grid gap-16 md:grid-cols-6">
        <div class="col-span-6 md:col-span-2 space-y-4">
            <div class="flex items-center gap-2">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0 5.33338V17.3335C0 21.0154 2.98479 24.0002 6.66672 24.0002H18.6668V21.3335H6.66672C4.45757 21.3335 2.66669 19.5426 2.66669 17.3335V5.33338H0Z"
                        fill="#6D4FE7" />
                    <path
                        d="M5.33338 2.66669V0H17.3335C21.0154 0 24.0002 2.98479 24.0002 6.66672V18.6668H21.3335V6.66672C21.3335 4.45756 19.5426 2.66669 17.3335 2.66669H5.33338Z"
                        fill="#6D4FE7" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M7.99872 9.33402V18.6674H6.66538C5.92899 18.6674 5.33203 18.0705 5.33203 17.3341V9.33402H7.99872Z"
                        fill="white" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.332 13.3341V18.6674H10.6653V13.3341H13.332Z"
                        fill="white" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M17.332 5.33398C18.0684 5.33398 18.6654 5.93094 18.6654 6.66733V18.6674H15.9987V5.33398H17.332Z"
                        fill="white" />
                </svg>

                <span class="text-[#7B5AFF] text-md font-semibold` font-secondary">Basement Devs</span>
            </div>
            <p class="text-text-medium font-primary font-medium text-xs leading-5">
                Conheça
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" class="text-white">Basement
                    Devs!</a>
                Lorem ipsum
                dolor sit amet, consectetur adipiscing elit. Vivamus sed egestas nisl. Vivamus blandit vehicula
                eleifend. Phasellus vulputate elit leo, porta vehicula nunc placerat placerat.
            </p>
        </div>
        <div class="col-span-6 md:col-span-4 flex justify-around">
            <x-footer-links :title="'About us'" :links="$aboutUsLinks" />
            <x-footer-links :title="'Suport'" :links="$supportLinks" />
            <x-footer-links :title="'Social Media'" :links="$socialMediaLinks" />
        </div>
    </div>

    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">

    <div class="flex justify-between font-secondary font-semibold text-sm">
        <div>© 2025 Basement Devs</div>
        <div>Todos os direitos reservados</div>
    </div>
</footer>
