@extends('layouts.app')

@section('title')
{{ __('Reset Password') }}
@endsection

@section('content')
    <div class="flex justify-center h-full py-10">
        <div class="w-full max-w-xl mt-24 mx-4">
            <div class="bg-white shadow-md rounded mb-4">
                <div class="bg-gray-100 px-4 py-4 text-center border-t-4 border-indigo-500 ">
                    <h1 class="font-semibold rounded-t">
                        {{ __('Reset Password') }}
                    </h1>
                </div>

                <div class="pt-6 px-8 pb-8">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">


                        <form-input
                            name="email"
                            id="email"
                            type="email"
                            value="{{ $email ?? old('email') }}"
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
                            <app-button :type="'submit'" :color="'primary'" :full="true">
                                {{ __('Reset Password') }}
                            </app-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
