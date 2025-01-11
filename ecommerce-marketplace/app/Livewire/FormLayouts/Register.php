<?php

namespace App\Livewire\FormLayouts;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class Register extends Component
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

    // Validation rules
    protected $rules = [
        'form.name' => 'required|string|max:255',
        'form.email' => 'required|string|email|max:255|unique:users,email',
        'form.password' => 'required|string|min:8|max:16',
        'form.phone_number' => 'required|digits_between:11,13',
        'form.profile_picture' => 'required|image|max:1024', // Max 1MB
    ];

    /**
     * Handle the form submission.
     */
    public function submit()
    {
        // Validate the form data
        $this->validate();

        // Handle profile picture upload
        $profilePicturePath = $this->form['profile_picture']->store('user-profile', 'public');

        // Save the user (adjust for your User model logic)
        $user = User::create([
            'name' => $this->form['name'],
            'email' => $this->form['email'],
            'password' => Hash::make($this->form['password']),
            'phone_number' => $this->form['phone_number'],
            'type' => 'buyer',
            'ewallet_balance' => 0.00,
            'activation' => true,
            'profile_picture' => $profilePicturePath,
        ]);

        // Authenticate the user (optional)
        Auth::login($user);

        // Redirect with a success message
        session()->flash('success', 'Registration successful!');
        return redirect()->route('home');
    }

    /**
     * Render the component's view.
     */
    public function render()
    {
        return view('livewire.form-layouts.register');
    }
}
