<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 rounded-full transition duration-300 cursor-pointer', 'style' => 'background-color: #007BFF; color: white; border-radius: 55px; border: none; font-size: 12px;']) }}>
    {{ $slot }}
</button>
