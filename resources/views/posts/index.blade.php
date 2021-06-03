@extends('layout.app')

@section('content')

@foreach($posts as $post)
    <x-posts.post-tile :post="$post"/>

@endforeach
@endsection
