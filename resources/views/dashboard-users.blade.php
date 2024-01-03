<x-app-layout>
    @section('title', 'Dashboard - Users')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-x-auto">
                <div class="my-3">
                    <a class="bg-gray-700 hover:bg-blue-700 text-white font-bold p-2 rounded"
                        href="{{ route('users.create') }}">Create</a>
                </div>
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 bg-gray-200 text-center">Id</th>
                            <th class="py-2 px-4 bg-gray-200 text-center">Name</th>
                            <th class="py-2 px-4 bg-gray-200 text-center">Last name</th>
                            <th class="py-2 px-4 bg-gray-200 text-center">Phone</th>
                            <th class="py-2 px-4 bg-gray-200 text-center">Email</th>
                            <th class="py-2 px-4 bg-gray-200 text-center">Edit</th>
                            <th class="py-2 px-4 bg-gray-200 text-center">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr class="dark:text-gray-200">
                                <td class="py-2 px-4 text-center">{{ $user->id }}</td>
                                <td class="py-2 px-4 text-center">{{ $user->name }}</td>
                                <td class="py-2 px-4 text-center">{{ $user->last_name }}</td>
                                <td class="py-2 px-4 text-center">{{ $user->phone }}</td>
                                <td class="py-2 px-4 text-center">{{ $user->email }}</td>
                                <td class="py-2 px-4 text-center">
                                    <a class="flex justify-center items-center"
                                        href="{{ route('users.edit', ['user' => $user->id]) }}">
                                        <img class="w-6" src="{{ asset('build/assets/img/edit.png') }}"
                                            alt="">
                                    </a>
                                </td>
                                <td class="py-2 px-4 text-center">
                                    <form action="{{ route('users.destroy', $user) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <x-danger-button>
                                            Delete
                                        </x-danger-button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                {{ $users->links() }}
            </div>
        </div>
    </div>

</x-app-layout>

