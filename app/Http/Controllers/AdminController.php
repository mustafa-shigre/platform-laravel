<?php

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Course;
use App\Models\Session;
use App\Models\Lecture;
class AdminController extends Controller
{
    // إضافة مستخدم جديد
    public function addUser(Request $request)
    {
        $userData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6',
            'role' => 'required|in:طالب,مدرس,مشرف', // تحقق من الأدوار المسموح بها
        ]);
        $user = new User($userData);
        $user->password = bcrypt($request->input('password'));
        $user->save();
    }

    // تحديث مستخدم
    public function updateUser(Request $request, User $user)
    {
        $userData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id, // تجنب التحقق من البريد الإلكتروني الحالي
            'password' => 'nullable|string|min:6', // يمكن تركه فارغًا إذا لم يتم تغيير كلمة المرور
            'role' => 'required|in:طالب,مدرس,مشرف',
        ]);

        // تحديث معلومات المستخدم
        $user->update($userData);

        // إعادة التوجيه أو إرسال رسالة نجاح
    }

    // حذف مستخدم
    public function deleteUser(User $user)
    {
        $user->delete();
    }

    // ربط الكورس بالمستخدم
    public function linkCourse(User $user, Course $course)
    {
        $user->courses()->attach($course->id);
    }

    // عرض جميع الكورسات
    public function viewCourses()
    {
        $courses = Course::all(); // احصل على جميع الكورسات
    return view('courses.index', ['courses' => $courses]);
    }

    // إضافة تدريب جديد
    public function addTraining(Request $request)
    {
        $session = new Session();
        $session->title = $request->input('title');
        $session->save();
    }

    // تحديث تدريب
    public function updateTraining(Request $request, Session $session)
    {
        $session->title = $request->input('title');
    $session->save();
    }

    // حذف تدريب
    public function deleteTraining(Session $session)
    {
        $session->delete();
    }

    // إضافة محاضرة جديدة
    public function addLecture(Request $request, Session $session)
    {
        $lecture = new Lecture();
    $lecture->title = $request->input('title');
    $lecture->session_id = $session->id;
    // اضافة المزيد من البيانات
    $lecture->save();
    }

    // تحديث محاضرة
    public function updateLecture(Request $request, Lecture $lecture)
    {
        $lecture->title = $request->input('title');
        // تحديث المزيد من البيانات
        $lecture->save();
    }

    // حذف محاضرة
    public function deleteLecture(Lecture $lecture)
    {
        $lecture->delete();
    }
}

