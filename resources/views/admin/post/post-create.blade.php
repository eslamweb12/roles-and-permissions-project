<x-create-modal title="post">
    <div class="col-md-6 mb-3">
        <label for="nameBasic" class="form-label">title</label>
        <input type="text" id="nameBasic" class="form-control" placeholder="Enter title"  wire:model="title"/>
        @include('enhancing.error',['property'=>'title'])

    </div>

    <div class="col-md-6 mb-0">
        <label for="emailBasic" class="form-label">content</label>
        <input type="text" id="emailBasic" class="form-control" placeholder="Enter content"  wire:model="content"/>

        @include('enhancing.error',['property'=>'content'])
    </div>


</x-create-modal>
