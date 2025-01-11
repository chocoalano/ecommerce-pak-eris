<?php

namespace App\Livewire\FormLayouts;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $form = [
        'usnamail' => '',
        'password' => '',
        'remember' => false,
    ];

    protected $rules = [
        'form.usnamail' => 'required|string',
        'form.password' => 'required|string|max:20',
        'form.remember' => 'boolean',
    ];

    public function submit()
    {
        $this->validate();
        $authenticated = $this->authenticate($this->form['usnamail'], $this->form['password'], $this->form['remember']);
        if ($authenticated) {
            session()->flash('success', 'Login successful!');
            return redirect()->route('home');
        }
        session()->flash('error', 'Invalid username/email or password.');
    }

    private function authenticate($usnamail, $password, $remember)
    {
        $field = filter_var($usnamail, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';
        if (Auth::attempt([$field => $usnamail, 'password' => $password], $remember)) {
            return true;
        }
        return false;
    }

    public function render()
    {
        return view('livewire.form-layouts.login');
    }
}
