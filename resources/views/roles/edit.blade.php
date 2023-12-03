<x-app-layout>
    <x-slot name="header">Edit Role</x-slot>
    <div class="container mt-5">
    <form class="form-control" method="POST" action="{{ route('roles.update', $role->id) }}">
        @csrf
        @method('PATCH')
        <label for="name">{{__('mylang.name')}}:</label>
        <input class="form-control m-2" type="text" name="name" id="name" value="{{ $role->name }}" required>
        <button type="submit" class="btn mt-2" style="color:light ; border:1px solid blue;">{{__('mylang.edit')}}</button>
    </form>
    </div>
</x-app-layout>
