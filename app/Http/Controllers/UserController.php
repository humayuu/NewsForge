<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::whereIn('role', ['admin', 'author'])
            ->where('id', '!=', 1)
            ->latest('id')
            ->paginate(5);

        return view('admin.users.index', compact('users'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('profile_photo_path')) {
            $validated['profile_photo_path'] = $request->file('profile_photo_path')
                ->store('avatars', 'public');
        }

        User::create($validated);

        return redirect()->back()->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $oldImagePath = $user->profile_photo_path;
        $newImg = null;
        if ($request->hasFile('profile_photo_path')) {
            $newImg = $request->file('profile_photo_path')->store('avatars', 'public');
            Storage::disk('public')->delete($oldImagePath);
        }

        $image = $newImg ? $newImg : $oldImagePath;

        $validated = $request->validated();
        $validated['profile_photo_path'] = $image;

        $user->update($validated);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $oldImagePath = $user->profile_photo_path;
        if ($oldImagePath) {
            Storage::disk('public')->delete($oldImagePath);
        }

        $user->delete();

        return redirect()->back();
    }

    /**
     * For Update User status
     */
    public function userStatus(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $newStatus = $user->status === 'active' ? 'inactive' : 'active';
        $user->update(['status' => $newStatus]);
        if ($newStatus === 'inactive') {
            $request->session()->regenerate();
        }
        return redirect()->back();
    }
}
