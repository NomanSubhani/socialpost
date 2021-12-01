@extends('layouts.app')
@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-4 rounded-lg">
            <form action="{{ route('posts') }}" method="POST" class="mb-4">
                @auth
                    @csrf
                    <div class="mb-4">

                        <label for="body" class="sr-only">Body</label>
                        <textarea name="body" placeholder="say something!" id="body" cols="30" rows="6"
                            class="bg-gray-200 p-2 rounded-lg border-2 w-full @error('body') border-red-600 @enderror"></textarea>
                        <div class="text-red-600 mt-2 text-sm">
                            @error('body')
                                {{ $message }}
                            @enderror
                        </div>

                    </div>
                    <div>
                        <button type="submit"
                            class="px-8 py-2 bg-blue-500 text-white rounded-font-medium rounded-lg">Post</button>
                    </div>
                @endauth
            </form>
            {{-- @if (count($posts)) --}}
            @if ($posts->count())
                @foreach ($posts as $post)
                    <x-post :post="$post"/>
                @endforeach
                {{ $posts->links() }}
            @else
                <p>There are no post yet</p>
            @endif
        </div>
    </div>
@endsection
