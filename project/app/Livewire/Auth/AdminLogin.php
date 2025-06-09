<?php

namespace App\Livewire\Auth;

use App\Models\admin;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('components.layouts.auth')]
class AdminLogin extends Component
{
    #[Validate('required|numeric')]
    public string $id = '';

    #[Validate('required|string')]
    public string $password = '';

    public function login(): void
    {
        $this->validate();

        $this->ensureIsNotRateLimited();

        $admin = admin::find($this->id);

        if (!$admin || $this->password !== '123') {
            RateLimiter::hit($this->throttleKey());
            throw ValidationException::withMessages([
                'id' => __('auth.failed'),
            ]);
        }

        Auth::guard('admin')->login($admin);
        RateLimiter::clear($this->throttleKey());
        Session::regenerate();

        $this->redirectIntended(default: route('admin.dashboard', absolute: false), navigate: true);
    }

    protected function ensureIsNotRateLimited(): void
    {
        if (!RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout(request()));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'id' => __('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    protected function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->id).'|'.request()->ip());
    }

    public function render()
    {
        return view('livewire.auth.admin-login', [
            'title' => __('Admin Login')
        ]);
    }
}