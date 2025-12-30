<div class="ms-2">
    <div class="table-responsive text-nowrap">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4>roles</h4>

            @can('role-create')
            <button
                type="button"
                class="btn btn-primary btn-sm mb-2 mx-2"
                data-bs-toggle="modal"
                data-bs-target="#exampleModal"
            >

                create role
            </button>
            @endcan()
        </div>

        <div>
            <label class="mb-2 ms-1">search</label>
            <input type="text" placeholder="search" class="form-control mb-3" style="width: 250px; margin-left: 5px;" wire:model.live="search">
        </div>
        <table class="table">
            <thead>
            <tr>

                <th>name</th>


                <th>actions</th>
            </tr>
            </thead>

            <tbody>
            @forelse($data as $role)
                <tr>
                    <td>{{ $role->name }}</td>



                    <td>
                        <div class="dropdown">
                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton{{ $role->id }}" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-ellipsis-vertical"></i> Actions
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton{{ $role->id }}">
                                <li>
                                    <a class="dropdown-item" href="#" wire:click.prevent="$dispatch('update', { id: {{ $role->id }} })">
                                        <i class="fa-solid fa-pen-to-square me-1"></i> Edit
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#" wire:click.prevent="$dispatch('deleteCounter', { id: {{ $role->id }} })">
                                        <i class="fa-solid fa-trash me-1"></i> Delete
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#" wire:click.prevent="$dispatch('skillShow', { id: {{ $role->id }} })">
                                        <i class="fa-solid fa-eye me-1"></i> Show
                                    </a>
                                </li>
                            </ul>
                        </div>
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
