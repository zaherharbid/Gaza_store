@extends('front.layout.master')
@section('title', 'Forgot Password Page')
@section('css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection
@section('content')
    <div class="py-20">
        <div class="max-w-xl mx-auto bg-gray-100 p-10 rounded-2xl">
            <h2 class="mb-4 text-center text-2xl">Forgot Password</h2>
            <div class="mb-4 text-sm text-gray-600">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button>
                        {{ __('Email Password Reset Link') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
@endsection
