@extends('layouts.app')

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

                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                {{ __('Name') }}
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="name" name="name"
                                value="{{ old('name') }}"
                                autofocus required
                                type="text" placeholder="{{ __('Name') }}">
                            @error('name')
                            <p class="mt-2 text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                                {{ __('E-Mail Address') }}
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="email" name="email"
                                value="{{ old('email') }}"
                                required
                                type="email" placeholder="{{ __('E-Mail Address') }}">
                            @error('email')
                            <p class="mt-2 text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                                {{ __('Password') }}
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="password" name="password" type="password" placeholder="password..."
                                autocomplete="current-password" required
                            >
                            @error('password')
                            <p class="mt-2 text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="password-confirm">
                                {{ __('Confirm Password') }}
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                id="password-confirm" name="password_confirmation" type="password"
                                placeholder="confirm password..."
                                autocomplete="current-password" required
                            >
                            @error('password_confirmation')
                            <p class="mt-2 text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-between">
                            <button
                                class="bg-indigo-500 text-white font-bold py-2
                                px-4 rounded focus:outline-none focus:shadow-none shadow
                                hover:bg-indigo-400
                                select-none"
                                type="submit">
                                {{ __('Register') }}
                            </button>
                            @if (Route::has('password.request'))
                                <a class="inline-block align-baseline font-bold text-sm text-indigo-500 hover:text-indigo-400"
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
