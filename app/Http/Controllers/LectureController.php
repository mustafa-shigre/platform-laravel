<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lecture;

class LectureController extends Controller
{
    public function index()
    {
        $this->authorize('index',Lecture::class);
        $lectures = Lecture::all();
        return view('lectures.index', compact('lectures'));
    }


    public function create()
    {
        $this->authorize('create',Lecture::class);
        $lectures = Lecture::all();
        return view('lectures.create', compact('lectures'));
    }

    public function store(Request $request)
{
    // قم بأولاً بإجراء الصحة (Validation) حسب احتياجاتك
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string', // Include the description field
        'video' => 'nullable|file|mimes:mp4,avi,mov,wmv',
    ]);

    // ثم قم بإنشاء المحاضرة باستخدام البيانات المرسلة من النموذج
    $lectureData = [
        'title' => $request->input('title'),
        'description' => $request->input('description'),
        'video' => $request->input('video'),
    ];
    if ($request->hasFile('video')) {
        // إذا تم تقديم ملف فيديو، قم بمعالجته هنا وحفظه
        $videoPath = $request->file('video')->store('videos'); // قم بتخزين الفيديو في مجلد "videos"
        $lectureData['video'] = $videoPath;
    }

    $lecture = Lecture::create($lectureData);

    // يمكنك أيضًا ربط المحاضرة بالمحاضرات المختارة
    // $lecture->lectures()->sync($request->input('lectures'));

    // بعد إنشاء المحاضرة، قم بتوجيه المستخدم إلى الصفحة الرئيسية لعرض المحاضرات
    return redirect()->route('lectures.index');
}
    public function edit(Lecture $lecture)
    {
        $this->authorize('update', $lecture);
        return view('lectures.edit', compact('lecture'));
    }

    public function update(Request $request, Lecture $lecture)
    {
        // Validation and lecture update logic here
        $this->authorize('update', $lecture);
        $lecture->update($request->all());
        return redirect()->route('lectures.index');
    }

    public function destroy(Lecture $lecture)
    {
        $this->authorize('destroy', $lecture);
        $lecture->delete();
        return redirect()->route('lectures.index');
    }
}
