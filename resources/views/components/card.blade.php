<div
    {{ $attributes->merge([
        'class' => '
                                                                bg-gradient-to-l
                                                                from-elevation-01dp
                                                                to-elevation-02dp
                                                                p-4
                                                                rounded-[20px]
                                                            ',
    ]) }}>
    {{ $slot }}
</div>
