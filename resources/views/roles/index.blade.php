<x-app-layout>
    <x-slot name="header">
        Roles
        <a href="{{ route('roles.create') }}" class="btn btn-secondary float-end">{{__('mylang.createrole')}}</a>

    </x-slot>

    <ul class="form-control container mt-5 mb-5">
        @foreach ($roles as $role)
        <li class="fs-4">{{ $role->name }}</li>
        <div class="d-flex justify-content-evenly align-items-center m-3">
            <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-secondary m-3">{{__('mylang.edit')}}</a>
            <form action="{{ route('roles.destroy', $role->id) }}" method="POST" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn" style="color:light ; border:1px solid blue;">{{__('mylang.delete')}}</button>
            </form>
        </div>
        <hr class="border border-primary border-3 opacity-75">
        @endforeach
    </ul>
</x-app-layout>
