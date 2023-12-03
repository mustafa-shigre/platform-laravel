<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $this->authorize('index', Course::class);
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        $this->authorize('create', Course::class);

        return view('courses.create');
    }

    public function store(Request $request)
    {
        $this->authorize('create', Course::class);

        // Validation and course creation logic here
        Course::create($request->all());
        return redirect()->route('courses.index');
    }

    public function edit(Course $course)
    {
        $this->authorize('edit', $course);

        return view('courses.edit', compact('course'));
    }

    public function update(Request $request, Course $course)
    {
        $this->authorize('update', $course);

        $course->update($request->all());
        return redirect()->route('courses.index');
    }

    public function destroy(Course $course)
    {
        $this->authorize('destroy', $course);

        $course->delete();
        return redirect()->route('courses.index');
    }
    public function show(Course $course){
        return view('courses.show',compact('course'));
    }
}
