@props(['data'])
<div class="w-full px-4 sm:w-2/4 lg:w-6/12">
    <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white
rounded-lg shadow xl:mb-0">
        <div class="flex-auto p-4">
            <div class="flex flex-wrap">
                <div class="relative flex-1 flex-grow w-full max-w-full pr4">
                    <h5 class="text-xs font-bold text-gray-500 uppercase">
                        {{$data['title']}}</h5>
                    <span class="text-xl font-semibold text-gray800">{{$data['value']}}</span>
                </div>
                <div class="relative flex-initial w-auto pl-4">
                    <div class="inline-flex items-center justify-center w-12
h-12 p-3 text-center text-white bg-blue-400 rounded-full">
                        <svg class="w-6 h-6 text-white fill-current" fill="none" stroke="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0
11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-
1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>
            <span class="text-xl font-semibold text-gray800">{{$data['period']}}</span>
        </div>
    </div>
</div>
