{{-- <x-app-layout>
    <x-slot name="header">show course</x-slot>
    <div class="container">

@foreach ($course as $item)
<h1>hello:{{$item}}</h1>
@endforeach

</div>
</x-app-layout> --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $course->title }}
        </h2>
    </x-slot>

    <div class="container mx-auto py-6">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <h2 class="text-lg font-semibold">{{ $course->title }}</h2>
                <p class="text-sm text-gray-600">{{ $course->description }}</p>
            </div>
        </div>
    </div>
</x-app-layout>
