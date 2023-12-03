<x-app-layout>
    <x-slot name="header">
        <h1>edit users</h1>
    </x-slot>
    <div class="container mt-5 mb-5">
<form class="form-control " action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PATCH')
    <!-- User details fields here -->

    <select name="roles[]" multiple class="form-select m-2">
        @foreach($roles as $role)
            <option value="{{ $role->id }}" {{ in_array($role->id, $userRoles) ? 'selected' : '' }}>{{ $role->name }}</option>
        @endforeach
    </select>

    <label for="name" >Name:</label>
    <input type="text" id="name" name="name" class="form-control m-2" value="{{ $user->name }}" required>
    <br>

    <label for="email" >Email:</label>
    <input type="email" id="email" class="form-control m-2"  name="email" value="{{ $user->email }}" required>
    <br>

    <label for="password">Password:</label>
    <input type="password" id="password" class="form-control m-2" name="password" placeholder="Leave blank to keep current password">
    <br>
    <button class="btn btn-outline-dark mt-3" type="submit" >Update User</button>

</form>
</div>
</x-app-layout>

