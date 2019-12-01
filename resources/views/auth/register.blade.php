@extends('layouts.app')

@section('title')
Sign Up
@endsection

@section('content')
    <div class="flex justify-center h-full py-10">
        <div class="w-full max-w-xl md:mt-24 mx-4">
            <div class="bg-white shadow-md rounded mb-4">
                <div class="bg-gray-100 px-4 py-4 text-center border-t-4 border-indigo-500 ">
                    <h1 class="font-semibold rounded-t">
                        Sign up
                    </h1>
                </div>

                <div class="pt-6 px-8 pb-8">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <form-input
                            name="name"
                            id="name"
                            type="text"
                            value="{{ old('name') }}"
                            placeholder="{{ __('Name') }}"
                            autofocus
                            required
                            @error('name'):error="'{{ $message }}'"@enderror
                        ></form-input>

                        <form-input
                            name="email"
                            id="email"
                            type="email"
                            value="{{ old('email') }}"
                            placeholder="{{ __('E-Mail Address') }}"
                            required
                            @error('email'):error="'{{ $message }}'"@enderror
                        ></form-input>

                        <form-input
                            name="password"
                            id="password"
                            type="password"
                            placeholder="{{ __('Password') }}"
                            required
                            @error('password'):error="'{{ $message }}'"@enderror
                        ></form-input>

                        <form-input
                            name="password_confirmation"
                            id="password-confirm"
                            type="password"
                            placeholder="{{ __('Confirm Password') }}"
                            required
                            @error('password_confirmation'):error="'{{ $message }}'"@enderror
                        ></form-input>

                        <div class="flex items-center justify-between">
                            <app-button :type="'submit'" :color="'primary'">Register</app-button>

                            @if (Route::has('password.request'))
                                <a class="inline-block align-baseline font-semibold text-sm text-indigo-500 hover:text-indigo-400"
                                   href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
