<div>
    <form wire:submit.prevent="submit" method="POST" >

        <input type="email" class="form-control" placeholder="Email"  wire:model="email">

        @error('email')
        <span class="text-danger" class="mb-2">{{$message}}</span>
        @enderror
        <input type="password" class="form-control" placeholder="Password"  wire:model="password">
        @error('password')
        <span class="text-danger">{{$message}}</span>
        @enderror
        <button type="submit" class="btn btn-primary w-100">@include('enhancing.loading',['buttonName'=>'login'])</button>
    </form>
</div>
