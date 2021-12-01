@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-4 rounded-lg">
            {{-- @if (count($posts)) --}}
            @if ($posts->count())
                @foreach ($posts as $post)
                    <x-post :post="$post" />
                @endforeach
                {{ $posts->links() }}
            @else
                <p>{{$user->name}} doesn't have any post yet</p>
            @endif
        </div>
    </div>
@endsection
