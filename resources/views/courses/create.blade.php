<x-app-layout>
<x-slot name="header">{{__('mylang.createcourse')}}</x-slot>
<div class="container">
<form method="POST" action="{{ route('courses.store') }}">
    @csrf
    <label for="title">{{__('mylang.title')}}:</label>
    <input type="text" class="form-control" name="title" id="title" required>

    <label for="description">{{__('mylang.description')}}:</label>
    <textarea name="description" class="form-control" id="description" rows="4" required></textarea>


    <button type="submit" class="btn mt-3" style="color:light ; border:1px solid blue;">{{__('mylang.createcourse')}}</button>
</form>
</div>
</x-app-layout>
