<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Pizze') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="flex flex-wrap mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="container flex flex-wrap mx-auto md:p-4 ">
                <div class="inline-block min-w-full px-1 overflow-hidden align-middle
md:shadow-lg md:px-0">
                    <table class="min-w-full shadow">
                        <thead>
                        <tr>
                            <th class="w-3/6 px-6 py-3 text-xs font-medium leading-4
tracking-wider text-left text-gray-500 uppercase bg-white border-b bordergray-200 md:w-2/5">
                                {{ __('Nome') }}
                            </th>

                            <th class="w-1/6 py-3 bg-white border-b border-gray-200
md:text-right md:px-3 md:w-2/12 sm:table-cell">
                                <a href="{{route('pizze.create')}}" class="inline-flex
items-center h-full px-3 py-2 leading-tight text-white bg-green-400 border
border-green-400 rounded-lg appearance-none focus:outline-none">
 <span class="block text-sm"> {{ __('Nuovo') }}
</span>
                                    <svg class="h-5 pl-2"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor">
                                        <path stroke-linecap="round" strokelinejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0
11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </a>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white">
                        @forelse($data['pizze'] as $pizza)
                            <tr class="cursor-pointer hover:bg-gray-100">
                                <td class="px-4 py-4 border-b border-gray-200
md:whitespace-no-wrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 w-20 h-20">
                                            <img class="w-20 h-20 rounded-full"
                                                 src="{{isset($pizza->featured_image) ? $pizza->featured_image :
'https://via.placeholder.com/256'}}" alt=""/>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-3xl font-medium
leading-5 text-gray-900">Pizza {{$pizza->name}}</div>
                                            <div class="text-lg leading-5 textgray-500 md:block mt-2">User: {{$pizza->authorName->name}}</div>
                                            <div class="text-lg text-red-500 leading-5 textgray-500 mt-2">Price: {{$pizza->price}} €</div>
                                            <div class="text-lg leading-5 text-green-700 mt-2">Ingredienti: {{$pizza->ingrediants}}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-2 py-4 text-sm font-medium
leading-5 text-right border-b border-gray-200 md:px-6 md:whitespace-nowrap">
                                    <div class="flex justify-end space-x-1">
                                        <a href="{{route('pizze.show',$pizza->id)}}"
                                           class="p-1 ml-3 border-2 border-blue-200 rounded-md hover:bg-blue-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </a>
                                        <a href="{{route('pizze.edit',$pizza->id)}}" class="p-1 ml-3 border-2 border-indigo-200 rounded-md hover:bgindigo-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-300"
                                                 fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                            </svg>
                                        </a>
                                        <form action="{{route('pizze.destroy',
$pizza->id)}}" method="POST" class="">
                                            @csrf
                                            @method('DELETE')
                                            <button class="p-1 border-2
border-red-200 rounded-md hover:bg-red-100">

                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500" fill="none" viewBox="0 0 24 24"
                                                     stroke="currentColor" onclick="return confirm('Vuoi davvero eliminare la pizza:  {{$pizza->name}} ?')">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                          d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="px-6 py-4 text-center whitespace-nowrap border-b border-gray-200" colspan="3">
                                    <div class="flex flex-col">
                                        <p class="py-5 text-sm font-medium
leading-4 text-center text-gray-700 md:text-xl">Nessun Risultato</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                    @if($data['pizze']->hasPages() )
                        {{ $data['pizze']->links('vendor.pagination.tailwindcss')}}
                    @else
                        <div class="flex items-center justify-between px-4 py-3 mb10 bg-white rounded-b-lg shadow sm:px-6 sm:mb-0">
                            <div class="hidden h-4 sm:flex-1 sm:flex sm:itemscenter sm:justify-between"></div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
