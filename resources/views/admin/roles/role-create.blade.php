<x-create-modal title="roles">
    <div class="col-md-6 mb-3">
        <label class="form-label">Role Name</label>
        <input type="text"
               class="form-control"
               placeholder="Enter Role Name"
               wire:model="name">

        @include('enhancing.error',['property'=>'name'])
    </div>

    <div class="col-12 mb-3">
        <label class="form-label">Permissions</label>

        <div class="row">
            @foreach($allPermissions as $permission)
                <div class="col-md-3 mb-2">
                    <label class="d-flex align-items-center gap-2">
                        <input type="checkbox"
                               wire:model="permissions"
                               value="{{ $permission->name }}">
                        {{ $permission->name }}
                    </label>
                </div>
            @endforeach
        </div>

        @include('enhancing.error',['property'=>'permissions'])
    </div>



</x-create-modal>
