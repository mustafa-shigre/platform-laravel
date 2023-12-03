<x-app-layout>
    <x-slot name="header">{{__('mylang.createrole')}}</x-slot>
    <div class="container mt-5">
<form class="form-control" method="POST" action="{{ route('roles.store') }}">
    @csrf
    <label class="p-3" for="name">{{__('mylang.name')}}:</label>
    <input placeholder="enter name please" class="form-control h-75 m-auto" type="text" name="name" id="name" required>
    <button type="submit" class="btn btn-outline-secondary mt-2"> {{__('mylang.create')}}</button>
</form>
</div>
    </div>
</x-app-layout>
