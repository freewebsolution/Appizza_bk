<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Modifica Utente') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="flex flex-row justify-center px-2 mt-3">
            <div class="w-full mx-auto max-w-7xl sm:px-6 lg:px-8">
                <x-auth-validation-errors class="mb-4" :errors="$errors"
                />
                <x-auth-session-status class="mb-4"
                                       :status="session('status')" />
                <x-pizze-form class="overflow-hidden bg-white rounded-lg
shadow" method="POST"
                              action="{{route('pizze.update', $data['user']->id)
}}" enctype='multipart/form-data'
                              autocomplete="off"
                              :user="$data['user']">
                    @csrf
                    @method('PUT')
                </x-pizze-form>
            </div>
        </div>
    </div>
</x-app-layout>

