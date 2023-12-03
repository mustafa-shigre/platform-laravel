{{-- <x-app-layout>
<x-slot name="header"> Edit {{ $course->title }}</x-slot> --}}
{{-- <div class="container">
<form method="POST" class="form-control" action="{{ route('courses.update', $course->id) }}">
    @csrf
    @method('PATCH')

    <label for="title">Title:</label>
    <input type="text" name="title" id="title" value="{{ $course->title }}" required>

    <label for="description">Description:</label>
    <textarea name="description" id="description" rows="4" required>{{ $course->description }}</textarea>

    <button type="submit">Update Course</button>
</form>
</div> --}}

<x-app-layout>
    <x-slot name="header"> {{__('mylang.edit')}} {{ $course->title }}</x-slot>
    <div class="container mt-5">
<form method="POST" class="form-control" action="{{ route('courses.update', $course->id) }}">
    @csrf
    @method('PATCH')
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">{{__('mylang.title')}}</label>
      <input type="text" class="form-control" name="title" id="exampleInputEmail1" value="{{ $course->title }}" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">{{__('mylang.description')}}</label>
      <textarea name="description" class="form-control" id="description" rows="4" required>{{ $course->description }}</textarea>
    </div>
    <button type="submit" class="btn" style="color:light ; border:1px solid blue;">{{__('mylang.update')}}</button>
  </form>
</div>
</x-app-layout>
