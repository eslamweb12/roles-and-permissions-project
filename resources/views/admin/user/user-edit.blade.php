@section('user', 'active')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Update User</h4>
                </div>

                <div class="card-body">

                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form wire:submit.prevent="submit" method="POST">

                        {{-- Name --}}
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text"
                                   class="form-control @error('name') is-invalid @enderror"
                                   placeholder="Name"
                                   wire:model="name">

                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Email --}}
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email"
                                   class="form-control @error('email') is-invalid @enderror"
                                   placeholder="Email"
                                   wire:model="email">

                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Password --}}
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password"
                                   class="form-control @error('password') is-invalid @enderror"
                                   placeholder="Password"
                                   wire:model="password">

                            <small class="text-muted">Leave empty if you don't want to change it.</small>

                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- ⭐ Role Select --}}
                        <div class="mb-3">
                            <label class="form-label">Role</label>

                            <select class="form-control @error('selectedRole') is-invalid @enderror"
                                    wire:model="selectedRole">

                                <option value="">-- Select Role --</option>

                                @foreach($roles as $role)
                                    <option value="{{ $role->name }}">
                                        {{ $role->name }}
                                    </option>
                                @endforeach
                            </select>

                            @error('selectedRole')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Buttons --}}
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('admin.user.index') }}" class="btn btn-secondary">
                                Cancel
                            </a>

                            <button type="submit" class="btn btn-primary">
                                @include('enhancing.loading', ['buttonName' => 'edit'])
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

