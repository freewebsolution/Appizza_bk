<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Modifica Pizza') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="flex flex-row justify-center px-2 mt-3">
            <div class="w-full mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                    <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">
                            {{__('Nome')}} "{{$data['pizza']->name}}"
                        </h3>

                    </div>
                    <div class="border-t border-gray-200">
                        <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3
sm:gap-4 sm:px-6">
 <span class="text-sm font-medium text-gray-500">
 {{__('Autore')}}
 </span>
                            <span class="mt-1 text-sm text-gray-900 sm:mt-0 sm:colspan-2">
 {{$data['pizza']->authorName->name}}
 </span>
                        </div>
                        <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3
sm:gap-4 sm:px-6">
 <span class="text-sm font-medium text-gray-500">
 {{__('Prezzo')}}
 </span>
                            <span class="mt-1 text-sm text-gray-900 sm:mt-0 sm:colspan-2">
 {{$data['pizza']->price}}€
 </span>
                        </div>
                        <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3
sm:gap-4 sm:px-6">
 <span class="text-sm font-medium text-gray-500">
 {{__('Data di Pubblicazione')}}
 </span>
                            <span class="mt-1 text-sm text-gray-900 sm:mt-0 sm:colspan-2">
 {{$data['pizza']->created_at->diffForHumans()}}
 </span>
                        </div>
                        <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3
sm:gap-4 sm:px-6">
 <span class="text-sm font-medium text-gray-500">
 {{__('Ingredienti')}}
 </span>
                            <span class="mt-1 text-sm text-gray-900 sm:mt-0 sm:colspan-2">
 {{$data['pizza']->ingrediants}}
 </span>
                        </div>
                        <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3
sm:gap-4 sm:px-6">
 <span class="text-sm font-medium text-gray-500">
 {{__('Immagine in evidenza')}}
 </span>
                            <span class="mt-1 text-sm text-gray-900 sm:mt-0 sm:colspan-2">
 <img alt="" id="cover" class="object-cover w-full h-64
rounded-lg" src="@isset($data['pizza']->featured_image)/{{($data['pizza']->featured_image)}}
 @else https://via.placeholder.com/256 @endisset">
 </span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
