@extends('admin.master')

@section('title', 'roles')
@section('roles','active')
@section('content')

    @livewire('admin.roles.roles-data')

    @livewire('admin.roles.role-create')
{{--    @livewire('admin.post.post-update');--}}
@endsection
