<div class="h-[600px] w-full flex justify-center items-center flex-col bg-[url('{{ asset('/assets/background-hero.webp') }}')] bg-cover bg-center relative">
    <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/90 to-black to-95%"></div>
    <div class="h-full text-center container mx-auto relative z-10 flex flex-col gap-y-4 justify-center">
        <x-content-header
            :span="'BasementDevs apresenta'"
            :title="$event->title"
            :description="$event->description"
        />

        <div class="space-x-3">
            <button class="bg-primary-500 text-white px-4 py-2 rounded-sm">Resgatar ingresso</button>
            <button class="bg-primary-500 text-white px-4 py-2 rounded-sm">Submeter palestra</button>
        </div>
        <div class="w-full relative z-20">
            <div class="w-full">
                <div class="flex justify-around gap-x-16 mt-8 bg-gradient-to-l from-elevation-01dp to-elevation-02dp border border-helper-outline rounded-sm py-6 px-16">
                    <div class="flex items-center gap-x-3 font-secondary">
                        <div class="bg-[#7B5AFF] rounded-lg p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M8 2V5M16 2V5M3.5 9.09H20.5M21 8.5V17C21 20 19.5 22 16 22H8C4.5 22 3 20 3 17V8.5C3 5.5 4.5 3.5 8 3.5H16C19.5 3.5 21 5.5 21 8.5Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="text-left">
                            <span class="text-text-high text-sm font-semibold font-primary">Data</span>
                            <p class="text-text-medium font-medium font-secondary">13 de Maio, 2024 - 17:00 Hrs</p>
                        </div>
                    </div>
                    <div class="w-px h-12 bg-helper-outline self-center"></div>
                    <div class="flex items-center gap-x-3">
                        <div class="bg-[#7B5AFF] rounded-lg p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M12 13.43C13.7231 13.43 15.12 12.0331 15.12 10.31C15.12 8.58687 13.7231 7.19 12 7.19C10.2769 7.19 8.88 8.58687 8.88 10.31C8.88 12.0331 10.2769 13.43 12 13.43Z" stroke="white" stroke-width="1.5"/>
                                <path d="M3.62001 8.49C5.59001 -0.169998 18.42 -0.159998 20.38 8.5C21.53 13.58 18.37 17.88 15.6 20.54C13.59 22.48 10.41 22.48 8.39001 20.54C5.63001 17.88 2.47001 13.57 3.62001 8.49Z" stroke="white" stroke-width="1.5"/>
                            </svg>
                        </div>
                        <div class="text-left">
                            <span class="text-text-high text-sm font-semibold font-primary">Endereço</span>
                            <p class="text-text-medium font-medium font-secondary">Avenida Sarah Kubitschek - 000 - Cachoeira Paulista - SP</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

