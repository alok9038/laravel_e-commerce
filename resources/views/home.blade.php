@extends('layouts.base')
@section('content')
    <div class="container">
        @foreach ($posts as $post)
        <div class="card shadow-sm border-0 my-3" style="border-radius: 10px;">
            <div class="card-body">
                <div class="card-title h6">{{ $post->title }}</div>
                <p class="small">{{ $post->body }}</p>
            </div>
        </div>
        @endforeach

        {{ $posts->links() }}
    </div>
@endsection
