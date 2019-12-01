@extends('layouts.app')

@section('content')
    <div class="flex justify-center h-full py-10">
        <div class="w-full max-w-xl mt-24 mx-4">
            <div class="bg-white shadow-md rounded mb-4">
                <div class="bg-gray-100 px-4 py-4 text-center border-t-4 border-indigo-500 ">
                    <h1 class="font-semibold rounded-t">
                        Forgot Password
                    </h1>
                </div>

                <div class="pt-6 px-8 pb-8">
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        @if (session('status'))
                            <alert
                            :type="'success'"
                            :message="'{{ session('status') }}'"></alert>
                        @endif

                        <form-input
                            name="email"
                            id="email"
                            type="email"
                            value="{{ $email ?? old('email') }}"
                            placeholder="{{ __('E-Mail Address') }}"
                            required
                            @error('email'):error="'{{ $message }}'"@enderror
                        ></form-input>

                        <div class="flex items-center justify-between">
                            <app-button :full="true">{{ __('Send Password Reset Link') }}</app-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
