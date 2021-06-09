@extends('layouts.app')

@section('content')
    <x-posts.post-article :post="$post"/>
@endsection
