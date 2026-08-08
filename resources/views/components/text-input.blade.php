@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 focus:border-[#0d6efd] focus:ring-[#0d6efd] rounded-md shadow-sm']) }}>
