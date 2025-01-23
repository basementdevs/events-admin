<footer class="bg-gradient-to-l from-elevation-01dp to-elevation-02dp p-12 text-text-high">
    <div class="grid gap-16 md:grid-cols-6">
        <div class="col-span-6 md:col-span-3">
            <span class="text-[#7B5AFF] text-md font-bold font-secondary">Footer</span>
            <p class="text-text-medium font-primary font-semibold leading-5">Ut harum quia doloremque ex in earum. Ad et voluptatibus consequatur. Sequi non omnis nulla numquam qui. Sapiente id quae qui sit voluptatem quis reprehenderit. Nihil aut voluptates nesciunt beatae.</p>
        </div>
        @foreach ([1, 2, 3] as $footerSection)
        <div class="col-span-6 md:col-span-1">
            <x-footer-links
                :title="'Footer'"
                :links="[1, 2, 3]"
            />
        </div>
        @endforeach
    </div>

    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">

    <div class="flex justify-between">
        <div>Left side</div>
        <div>Right side</div>
    </div>
</footer>
