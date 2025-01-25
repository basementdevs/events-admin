<x-app-layout>
    <main class="flex flex-col space-y-24 md:space-y-36">
        <x-landing.hero :event="$event" />
        <x-landing.sponsors />
        <x-landing.speakers />
        <x-landing.highlights />
        <x-landing.cta-invite />
        <x-landing.description />
        <x-landing.form-faq />
        <x-landing.discover-city />
        <x-landing.footer />
    </main>
</x-app-layout>
