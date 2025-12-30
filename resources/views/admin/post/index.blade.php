@extends('admin.master')

@section('title', 'Welcome')
@section('post','active')
@section('content')

    @livewire('admin.post.post-data')

    @livewire('admin.post.post-create')
    @livewire('admin.post.post-update');
@endsection
