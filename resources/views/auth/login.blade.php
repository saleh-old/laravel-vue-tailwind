@extends('layouts.app')

@section('content')
    <div class="flex justify-center h-full py-10">
        <div class="w-full max-w-xl mt-24 mx-4">
            <div class="bg-white shadow-md rounded mb-4">
                <div class="bg-gray-100 px-4 py-4 text-center border-t-4 border-indigo-500 ">
                    <h1 class="font-semibold rounded-t">
                        Sign In
                    </h1>
                </div>

                <div class="pt-6 px-8 pb-8">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                                {{ __('E-Mail Address') }}
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="email" name="email"
                                value="{{ old('email') }}"
                                autofocus required
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
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                id="password" name="password" type="password" placeholder="password..."
                                autocomplete="current-password" required
                            >
                            @error('password')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label class="custom-label flex">
                                <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2">
                                    <input type="checkbox" class="hidden"
                                           name="remember"
                                           id="remember"
                                           checked>
                                    <svg class="cursor-pointer hidden w-4 h-4 text-green-600 pointer-events-none"
                                         viewBox="0 0 172 172">
                                        <g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none"
                                           font-weight="none" font-size="none" text-anchor="none"
                                           style="mix-blend-mode:normal">
                                            <path d="M0 172V0h172v172z"/>
                                            <path
                                                d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z"
                                                fill="currentColor" stroke-width="1"/>
                                        </g>
                                    </svg>
                                </div>
                                <span
                                    class="select-none cursor-pointer">{{ __('Remember Me') }}</span>
                            </label>
                        </div>


                        <div class="flex items-center justify-between">
                            <button
                                class="bg-indigo-500 text-white font-bold py-2
                                px-4 rounded focus:outline-none focus:shadow-none shadow
                                hover:bg-indigo-400
                                select-none"
                                type="submit">
                                {{ __('Login') }}
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
