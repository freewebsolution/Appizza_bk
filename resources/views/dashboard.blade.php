<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="flex flex-wrap mx-auto max-w-7xl sm:px-6 lg:px-8">
            @foreach($data['cards'] as $card )
                <x-card-stats :data="$card"></x-card-stats>
            @endforeach
        </div>
        <div class="flex flex-wrap py-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            @foreach($data['lasts'] as $last )
                <x-card-last :data="$last"></x-card-last>
            @endforeach
        </div>
    </div>
</x-app-layout>
