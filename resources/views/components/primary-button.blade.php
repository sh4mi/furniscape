<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-dark d-block my-4']) }}>
    {{ $slot }}
</button>