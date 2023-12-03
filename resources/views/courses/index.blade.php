
<x-app-layout>
<x-slot name="header">
    Course Listing
    <a href="{{ route('courses.create') }}" class="btn btn-secondary float-end">{{__('mylang.createcourse')}}</a>
</x-slot>

<table class="table table-striped m-5 container">
    <thead>
        <tr>
            <th>ID</th>
            <th>{{__('mylang.title')}}</th>
            <th>{{__('mylang.description')}}</th>
            <th>{{__('mylang.action')}}</th>
        </tr>
    </thead>
    <tbody>
        @foreach($courses as $course)
            <tr>
                <td>{{ $course->id }}</td>
                <td>{{ $course->title }}</td>
                <td>{{ $course->description }}</td>
                <td>
                    <div class="d-flex justify-content-evenly">
                    <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-secondary">{{__('mylang.edit')}}</a>
                    <a href="{{ route('courses.show', $course->id) }}" class="btn btn-secondary">{{__('mylang.view')}}</a>
                    <form action="{{ route('courses.destroy', $course->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn" style="color:light ; border:1px solid blue;" >{{__('mylang.delete')}}</button>
                    </form>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

</x-app-layout>
