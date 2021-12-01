@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-4 rounded-lg">
            <div class="flex justify-center mb-2 rounded-lg bg-green-500">
                <h1 class="text-xl p-4">Login Here</h1>
            </div>
            @if (session('status'))
            <div class="flex justify-center text-white mb-1 p-4 rounded-lg bg-red-500">
                {{session('status')}}
            </div>
            @endif
            <form action="{{ route('login') }}" method="POST">
                @csrf
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
                    <div class="flex items-center">
                        <input type="checkbox" name="remember" id="remember" class="mr-2">
                        <label for="remember">Remember me</label>
                    </div>
                </div>
                <div class="bg-blue-700 flex justify-center rounded-lg p-3 text-lg text-white">
                    <button type="submit">login</button>
                </div>
            </form>
        </div>
    </div>
@endsection
