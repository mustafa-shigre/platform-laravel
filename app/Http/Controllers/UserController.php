<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator ;

class UserController extends Controller
{
    // دالة لعرض قائمة المستخدمين
    public function index()
    {
        $this->authorize('index', user::class);
        $users = User::all();
        return view('users.index', compact('users'));
        // قم بوضع الكود هنا لاستعراض المستخدمين
    }
    public function get_all_users()
    {
        $users = User::all();
    return response()->json($users);
        // قم بوضع الكود هنا لاستعراض المستخدمين
    }


    // يمكنك تعريف المزيد من الدوال هنا حسب احتياجات التطبيق
    public function create()
{
    $this->authorize('create', user::class);
    $roles = Role::all();
    return view('users.create', compact('roles'));
}

public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|unique:users|max:255',
        'password' => 'required|string|min:6',
    ]);

    if ($validator->fails()) {
        return redirect('your-route')
            ->withErrors($validator)
            ->withInput();
    }

    // Hash the password before saving it to the database
    $hashedPassword = Hash::make($request->input('password'));

    // Create a new user instance with the hashed password
    $user = new User([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'password' => $hashedPassword, // Use the hashed password
    ]);

    $user->save();

    // Redirect or display a success message
    $user->roles()->sync($request->input('roles'));
    return redirect()->route('users.index');
}

public function edit(User $user)
{
    $this->authorize('edit', $user);
    $roles = Role::all();
    $userRoles = $user->roles->pluck('id')->toArray();
    return view('users.edit', compact('user', 'roles', 'userRoles'));
}

public function update(Request $request, User $user)
{
     // Validation and user update logic here
    $user->update($request->all());
    $user->lectures()->sync($request->input('lectures'));
    return redirect()->route('users.index');
    // Validation logic here
    $user->update($request->all());
    $user->roles()->sync($request->input('roles'));

    // Redirect or display success message
}
public function destroy(User $user)
{
    $this->authorize('destroy', $user);
    $user->delete();
    return redirect()->route('users.index');
}

}
