@extends('layouts.app')

@section('title', '')

@section('content')

    <ul>
        <li>Subject: {{$post->subject}}</li>
        <li>Body: {{$post->body}}</li>
        <li>Date Posted: {{$post->dateposted}}</li>
    </ul>   

@endsection