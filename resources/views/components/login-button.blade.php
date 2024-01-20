<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2']) }}>
    {{ $slot }}
</button>
