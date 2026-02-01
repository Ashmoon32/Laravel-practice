<x-layouts.app>
    <x-card title="My First Card">
        <p class="mb-4">
            Hello this is inside Card.
            <p>
                {{ $greeting }} {{ $name }}!
            </p>
        </p>

        <x-button>
            Click Me
        </x-button>
    </x-card>
</x-layouts.app>