@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-4 rounded-lg">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="flex justify-center mb-2 rounded-lg bg-green-500">
                    <h1 class="text-xl p-4">Registration Form</h1>
                </div>
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" placeholder="enter your name" value="{{ old('name') }}"
                        class="bg-gray-200 p-2 rounded-lg border-2 w-full @error('name') border-red-600 @enderror">
                    <div class="text-red-600 mt-2 text-sm">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="mb-4">
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" name="username" id="username" placeholder="enter your username"
                        value="{{ old('username') }}"
                        class="bg-gray-200 p-2 rounded-lg border-2 w-full @error('name') border-red-600 @enderror">
                    <div class="text-red-600 mt-2 text-sm">
                        @error('username')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" placeholder="enter your email" value="{{ old('email') }}"
                        class="bg-gray-200 p-2 rounded-lg border-2 w-full @error('name') border-red-600 @enderror">
                    <div class="text-red-600 mt-2 text-sm">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="enter your password"
                        class="bg-gray-200 p-2 rounded-lg border-2 w-full @error('name') border-red-600 @enderror">
                    <div class="text-red-600 mt-2 text-sm">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="sr-only">Repeat Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation"
                        placeholder="enter your password again"
                        class="bg-gray-200 p-2 rounded-lg border-2 w-full @error('name') border-red-600 @enderror">
                    <div class="text-red-600 mt-2 text-sm">
                        @error('password_confirmation')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="bg-blue-700 flex justify-center rounded-lg p-3 text-lg text-white">
                    <button type="submit">Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection
