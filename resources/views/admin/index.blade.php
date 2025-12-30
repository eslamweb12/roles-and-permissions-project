@extends('admin.master')

@section('title', 'Welcome')
@section('dashboard','active')
@section('content')
    <div class="text-center">
        <h1 class="mb-4">Welcome to Roles & Permissions System</h1>
        <p class="mb-5 text-muted">Manage users, roles, and permissions easily.</p>

        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="#" class="btn btn-primary btn-lg">Create Role</a>
            <a href="#" class="btn btn-success btn-lg">Create Permission</a>
            <a href="#" class="btn btn-warning btn-lg">Assign Role</a>
            <a href="#" class="btn btn-secondary btn-lg">Users</a>
        </div>
    </div>
@endsection
