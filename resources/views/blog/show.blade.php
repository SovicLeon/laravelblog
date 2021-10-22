@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="p-15 pl-3">
        <h1 class="text-6xl">
            {{ $post->title }}
        </h1>
    </div>
</div>
<div class="w-4/5 m-auto p-3">
    <span class="text-gray-500">
        By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>
    <div class="mt-3">
        <img src="{{ asset('images/' . $post->image_path) }}" width="700" alt="">
    </div>
    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{ $post->description }}
    </p>

</div>

@endsection