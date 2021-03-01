@extends('layouts.app')

@section('title')
    Login
@endsection

@section('content')
    <div class="flex items-center justify-center w-full h-full">
        <div class="flex flex-col gap-4">
            <div>
                <h1 class="text-3xl font-bold text-center">CS Manager</h1>
            </div>
            <div class="flex flex-col gap-4">
                <div>
                    <h2 class="text-center text-gray-600">Sign in to access</h2>
                </div>
                <form action="{{ route('auth.login') }}" class="flex flex-col gap-2" method="POST">
                    @csrf
                    <div class="flex flex-col gap-2">
                        <div class="flex flex-col gap-4">
                            @error('credential')
                                <div class="p-2 font-semibold text-center text-white bg-red-600 border-2 rounded-lg">
                                    {{ $message }}
                                </div>
                            @enderror                            
                            <div class="flex flex-col">
                                <label for="email" @error('email') class="text-red-600" @enderror>Email</label>
                                <input type="email" id="email" name="email" class="p-2 placeholder-gray-600 transition duration-200 ease-out bg-black bg-opacity-25 border-2 rounded-lg focus:outline-none focus:border-blue-600 @error('email')
                                border-red-600 @enderror" value="{{ old('email') }}" placeholder="johndoe@mail.com" required>
                                @error('email')  <small class="px-2 font-semibold text-red-600">{{ $message }}</small> @enderror
                               
                            </div>
                            <div class="flex flex-col">
                                <label for="password" @error('password') class="text-red-600" @enderror>Password</label>
                                <input type="password" id="password" name="password" class="p-2 transition duration-200 ease-out bg-black bg-opacity-25 border-2 rounded-lg focus:outline-none focus:border-blue-600 @error('password')
                                border-red-600 @enderror" value="{{ old('password') }}" required>
                                @error('password')  <small class="px-2 font-semibold text-red-600">{{ $message }}</small> @enderror
                            </div>
                        </div>
                        <label for="remember-me" class="flex items-center gap-1">
                            <input type="checkbox" id="remember-me" name="remember_me" class="w-4 h-4 bg-red-600"> Remember Me
                        </label>
                    </div>
                    <div>
                        <button type="submit" class="w-full p-2 font-semibold text-center text-white transition duration-200 ease-out bg-blue-600 rounded-lg focus:outline-none hover:bg-blue-800 disabled:bg-gray-600" id="submit-button" disabled>Sign In</button>
                    </div>
                    <div class="w-full text-center">
                        <a href="" class="transition duration-200 ease-out hover:text-blue-600">
                            Forgot Password?
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/controllers/loginForm.controller.js') }}"></script>
@endpush