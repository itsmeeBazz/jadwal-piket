<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProfileController extends Controller
{
    function index(){
        return view('info');
    }

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->validate([
            'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // sesuaikan validasi sesuai kebutuhan Anda
        ]);
    
        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            if(Storage::exists('public/' .Auth::user()->profile_image)){
                Storage::delete('public/'. Auth::user()->profile_image);
            }
            $imageName =  $image->store('profile_images', 'public');
            $request->user()->profile_image = $imageName; // Menyimpan nama file ke atribut profile_image
        };
        $request->user()->save();
        
        return Redirect::route('profile.index')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/info');
    }
}
