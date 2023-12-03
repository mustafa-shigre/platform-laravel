<x-app-layout>
    <x-slot name="header">Create Lecture</x-slot>

    <div class="container mt-5">
        <form action="{{ route('lectures.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Add Title and Description fields here -->
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" class="form-control">
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" class="form-control mb-3"></textarea>
            </div>

            <!-- Add Video input field here -->

                <label for="video">Video:</label>
                <input type="file" class="form-control" name="video" accept="video/*">


            <!-- Add Actions buttons here -->
            <div class="form-group">
                <button type="submit" class="btn mt-5" style="color:light ; border:1px solid blue;">Save</button>
                <a href="{{ route('lectures.index') }}" class="btn btn-secondary mt-5">Cancel</a>
            </div>
        </form>
    </div>
</x-app-layout>
