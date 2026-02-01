@props(['title'])

<div class="bg-white p-4 rounded shadow">
    <h2 class="text-lg font-bold mb-2">
        {{  $title }}
    </h2>
    {{  $slot }}
</div>