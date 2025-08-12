@extends('front.layout.master')
@section('title', 'Confirm Password Page')
@section('css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection
@section('content')
    <div class="py-20">
        <div class="max-w-xl mx-auto bg-gray-100 p-10 rounded-2xl">
            <h2 class="mb-4 text-center text-2xl">Confirm Password</h2>
            <div class="mb-4 text-sm text-gray-600">
                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
            </div>

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <!-- Password -->
                <div>
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="flex justify-end mt-4">
                    <x-primary-button>
                        {{ __('Confirm') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
@endsection
