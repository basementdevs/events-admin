<div {{ $attributes->merge([
    'class' => '
        border-helper-outline
        bg-gradient-to-l
        from-elevation-01dp
        to-elevation-02dp
        p-8
        border
        rounded
    '])
}}>
    {{ $slot }}
</div>
