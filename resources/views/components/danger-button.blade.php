<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-danger d-block my-4']) }}>
    {{ $slot }}
</button>