@extends('layout.app')

@section('content')
    <x-posts.post-article :post="$post"/>
@endsection
