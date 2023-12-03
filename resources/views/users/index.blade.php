<x-app-layout>

    <x-slot name="header">users
        <a class="btn btn-secondary float-end " href="{{ route('users.create') }}">{{__("mylang.createuser")}}</a>
        {{-- <a href="{{ route('certificates.index') }}" class="btn btn-info mt-3">Show Certificate</a> --}}


    </x-slot>

<ul class="list-group container m-5 Larger" style="background-color: #243d63">
    @foreach ($users as $user)
        <li class="list-group-item m-1">
            {{-- <p class="fw-bold">id: {{ $user->id }}</p> --}}
            <p class="fw-bold">email: {{ $user->email}}</p>
            <h3 class="fw-bold">name: {{ $user->name}}</h3>
        <div class="d flex justify-content float-end mr-5 align-items-center">
            <a class="btn btn-secondary" href="{{ route('users.edit', $user->id) }}">{{__("mylang.edit")}}</a>
            <form class="d-inline" action="{{ route('users.destroy', $user->id) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn ms-1" style="color:light ; border:1px solid blue;">{{__("mylang.delete")}}</button>
            </form>
        </div>
    </li>
    @endforeach
</ul>

</x-app-layout>
