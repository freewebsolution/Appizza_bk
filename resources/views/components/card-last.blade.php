@props(['data'])
<div class="w-full px-4 mb-6 sm:w-2/4 lg:w-6/12">
    <div class="p-8 px-4 bg-white rounded-lg shadow">
        <h2 class="pb-4 -mt-4 text-xs font-bold text-gray-500 uppercase">
            {{$data['heading']}}</h2>
        <div class="flex space-x-6">
            <div class="flex flex-col items-center">
                <img src="{{$data['image']}}" class="duration-300 transform
rounded-full shadow-lg cursor-pointer w-28 hover:scale-105" />
                <div class="relative"><span class="absolute px-2 py-1 text-xs
font-semibold text-white duration-300 transform bg-green-500 rounded-md
shadow-md cursor-pointer -left-5 -top-3 hover:scale-110">NEW</span></div>
            </div>
            <div class="flex flex-col">
                <div class="flex flex-col justify-between w-full mb-4">
                    <h3 class="text-2xl font-medium text-gray-800">
                        {{$data['name']}}</h3>
                    <h4 class="text-xl font-medium text-gray-700">
                        {{$data['detail']}}</h4>
                    <span class="pt-3 italic text-gray-500 text-md">Ultima
attività {{$data['updated_at']}} </span>
                </div>
            </div>
        </div>
    </div>
</div>
