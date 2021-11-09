@extends('layouts.app')

@section('title')
    Posts
@endsection

@section('content')
    <p> Posts </p>

    <ul>
        @foreach ($posts as $post)
            <li>{{$post->subject}}</li>
        @endforeach
    </ul>


@endsection