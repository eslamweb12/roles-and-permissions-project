@extends('admin.master')

@section('title', 'Welcome')
@section('user','active')
@section('content')

@livewire('admin.user.user-data')
@endsection
