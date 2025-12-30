<div class="ms-2">
    <div class="table-responsive text-nowrap">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4>Users</h4>

            @role('admin')

            <a href="{{route('admin.users.create')}}" class="btn btn-success">
                Create New User
            </a>
            @endrole
        </div>

        <div>
            <label class="mb-2 ms-2">search</label>
            <input type="text" placeholder="search" class="form-control mb-3" style="width: 250px;" wire:model.live="search">
        </div>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Roles</th> <!-- جديد -->
                <th>Actions</th>
            </tr>
            </thead>

            <tbody>
            @forelse($data as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>

                    {{-- عرض الـ roles --}}
                    <td>
                        @forelse($user->roles as $role)
                            <span class="badge bg-primary">{{ $role->name }}</span>
                        @empty
                            <span class="text-muted">No role</span>
                        @endforelse
                    </td>

                    <td>
                        <!-- Show -->
                        <button class="btn btn-info btn-sm" wire:click="show({{ $user->id }})">
                            Show
                        </button>

                        <!-- Edit -->
                        <a class="btn btn-primary btn-sm" href="{{ route('admin.users.edit', $user->id) }}">
                            Edit
                        </a>

                        <!-- Delete -->
                        <button class="btn btn-danger btn-sm"
                                wire:click="deleteUser({{ $user->id }})"
                                onclick="confirm('Are you sure to delete this record?') || event.stopImmediatePropagation()">
                            Delete
                        </button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-danger text-center">No data found</td>
                </tr>
            @endforelse
            </tbody>


        </table>

        {{ $data->links() }}
    </div>
</div>
