@props(['type' => 'button'])

<button 
    type="{{ $type }}" 
    class="bg-blue-500 text-white px-4 py-2 rounded">
    {{ $slot }}
</button>