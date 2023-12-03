{{-- <label for="lectures">Select Lectures:</label>
<select name="lectures[]" multiple>
    @foreach($lecture as $lectures)
        <option value="{{ $lectures->id }}">{{ $lectures->title }}</option>
    @endforeach
</select> --}}
<x-app-layout>


<x-slot name="header">Edit Lecture</x-slot>
<div class="container mt-5">
    <form class="form-control" action="{{ route('lectures.update', $lecture->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input class="form-control" type="text" id="title" name="title" value="{{ $lecture->title }}" required>
        <br>

        <label for="description">Description:</label>
        <textarea class="form-control" id="description" name="description" required>{{ $lecture->description }}</textarea>
        <br>

        <label for="video_link">Video Link:</label>
        <input class="form-control" type="text" id="video_link" name="video_link" value="{{ $lecture->video }}" required>
        <br>
        <button class="btn" style="color:light ; border:1px solid blue;" type="submit">Save Changes</button>
    </form>
</div>
</x-app-layout>

