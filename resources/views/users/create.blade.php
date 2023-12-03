<x-app-layout>
    <x-slot name="header"><h3>User Create</h3></x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <form method="POST" action="{{ route('users.store') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                            <input type="text" name="name" id="name" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('name') }}" required />
                        </div>

                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                            <input type="email" name="email" id="email" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('email') }}" required />
                        </div>

                        <div class="mb-4">
                            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password:</label>
                            <input type="password" name="password" id="password" class="form-input rounded-md shadow-sm mt-1 block w-full" required />
                        </div>

                        <!-- Include a select input to assign roles to the user, similar to what you did in the edit view -->
                        <div class="mb-4">
                            <label for="roles" class="block text-gray-700 text-sm font-bold mb-2">Roles:</label>
                            <select name="roles[]" id="roles" class="form-multiselect block w-full mt-1">
                                @foreach($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                            <button type="submit" class="btn btn-outline-dark m-1 p-3"> up</button>
                    </form>
                </div>
            </div>
        </div>
    </x-app-layout>


