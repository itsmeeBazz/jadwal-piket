@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-[#02A04B] focus:ring-[#02A04B] rounded-md shadow-sm']) !!}>
