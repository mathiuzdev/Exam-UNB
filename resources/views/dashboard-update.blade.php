<x-app-layout>
    @section('title', 'Dashboard - Update')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit User') }}
        </h2>
    </x-slot>

    <div class="flex justify-center">

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">


            <div class="max-w-xl">
                @include('profile.partials.update-user-form')
            </div>


        </div>

    </div>
</x-app-layout>
