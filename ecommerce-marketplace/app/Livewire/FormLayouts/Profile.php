<?php

namespace App\Livewire\FormLayouts;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class Profile extends Component
{
    use WithFileUploads;

    // Form data
    public $form = [
        'name' => '',
        'email' => '',
        'password' => '',
        'phone_number' => '',
        'profile_picture' => null,
    ];

    public function mount()
    {
        $user = Auth::user();

        $this->form = [
            'name' => $user->name ?? '',
            'email' => $user->email ?? '',
            'password' => '',
            'phone_number' => $user->phone_number ?? '',
            'profile_picture' => $user->profile_picture ?? null,
        ];
    }

    // Validation rules
    protected function rules()
    {
        return [
            'form.name' => 'required|string|max:255',
            'form.email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
            'form.password' => 'nullable|string|min:8|max:16',
            'form.phone_number' => 'required|digits_between:11,13',
            'form.profile_picture' => 'nullable|image|max:1024', // Max 1MB
        ];
    }

    public function submit()
    {
        // Validate the form data
        $validatedData = $this->validate();

        // Handle profile picture upload if provided
        $profilePicturePath = $this->form['profile_picture']
            ? $this->form['profile_picture']->store('user-profile', 'public')
            : Auth::user()->profile_picture;

        // Update the user
        $user = Auth::user();
        $user->update([
            'name' => $validatedData['form']['name'],
            'email' => $validatedData['form']['email'],
            'password' => $validatedData['form']['password']
                ? Hash::make($validatedData['form']['password'])
                : $user->password,
            'phone_number' => $validatedData['form']['phone_number'],
            'profile_picture' => $profilePicturePath,
        ]);

        // Redirect with a success message
        session()->flash('success', 'Profile updated successfully!');
        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.form-layouts.profile');
    }
}
