    <div class="h-[689px] w-full flex justify-center items-center flex-col bg-cover bg-center relative"
        style="background-image: url('{{ asset('assets/background-hero.webp') }}')">
        <div class="absolute inset-0 bg-gradient-to-b from-black/65 to-45% via-black from-100%"></div>
        <div class="h-full text-center container mx-auto relative z-10 pt-20 md:pt-0 flex flex-col gap-y-4 my-24">
            <x-content-header :span="'BasementDevs apresenta'" :title="$event->title" :description="$event->description" />

            <div class="md:gap-x-3 mt-8 flex flex-col md:flex-row gap-y-3 items-center justify-center">
                <button class="bg-[#7B5AFF] text-white px-6 py-3 font-bold font-button md:w-auto w-full rounded-[12px]">
                    Resgatar ingresso
                </button>

                <button class="border border-[#7B5AFF] text-white px-6 py-3 font-medium md:w-auto w-full rounded-[12px]">
                    Submeter palestra
                </button>
            </div>
            <div class="w-full relative z-20 mt-20">
                <div class="w-full">
                    <div
                        class="flex flex-col md:flex-row justify-around gap-x-16 mt-8 bg-elevation-01dp border border-helper-outline rounded-sm py-6 px-16 ">
                        <div class="flex items-center gap-x-3 font-secondary">
                            <div>
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="21" cy="21" r="21" fill="#7B5AFF" fill-opacity="0.16" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M15.4008 9.7998C14.6276 9.7998 14.0008 10.4266 14.0008 11.1998V12.5998H12.6008C11.0544 12.5998 9.80078 13.8534 9.80078 15.3998V29.3998C9.80078 30.9462 11.0544 32.1998 12.6008 32.1998H29.4008C30.9472 32.1998 32.2008 30.9462 32.2008 29.3998V15.3998C32.2008 13.8534 30.9472 12.5998 29.4008 12.5998H28.0008V11.1998C28.0008 10.4266 27.374 9.7998 26.6008 9.7998C25.8276 9.7998 25.2008 10.4266 25.2008 11.1998V12.5998H16.8008V11.1998C16.8008 10.4266 16.174 9.7998 15.4008 9.7998ZM15.4008 16.7998C14.6276 16.7998 14.0008 17.4266 14.0008 18.1998C14.0008 18.973 14.6276 19.5998 15.4008 19.5998H26.6008C27.374 19.5998 28.0008 18.973 28.0008 18.1998C28.0008 17.4266 27.374 16.7998 26.6008 16.7998H15.4008Z"
                                        fill="#7B5AFF" />
                                </svg>
                            </div>

                            <div class="text-left">
                                <span class="text-text-high text-sm font-semibold font-primary">Data</span>
                                <p class="text-text-medium font-medium font-primary">13 de Maio, 2024 - 17:00 Hrs</p>
                            </div>
                        </div>

                        <hr class="h-px md:w-px md:h-auto my-8 md:my-0 md:mx-8 border-0 bg-helper-outline">

                        <div class="flex items-center gap-x-3">
                            <div>
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="21" cy="21" r="21" fill="#7B5AFF" fill-opacity="0.16" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14.0696 12.6702C17.8967 8.84302 24.1017 8.84302 27.9289 12.6702C31.756 16.4973 31.756 22.7023 27.9289 26.5294L20.9992 33.4591L14.0696 26.5294C10.2424 22.7023 10.2424 16.4973 14.0696 12.6702ZM20.9992 22.3998C22.5456 22.3998 23.7992 21.1462 23.7992 19.5998C23.7992 18.0534 22.5456 16.7998 20.9992 16.7998C19.4528 16.7998 18.1992 18.0534 18.1992 19.5998C18.1992 21.1462 19.4528 22.3998 20.9992 22.3998Z"
                                        fill="#7B5AFF" />
                                </svg>
                            </div>
                            <div class="text-left">
                                <span class="text-text-high text-sm font-semibold font-primary">Endereço</span>
                                <p class="text-text-medium font-medium font-primary">Avenida Sarah Kubitschek - 000 -
                                    Cachoeira Paulista - SP</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
