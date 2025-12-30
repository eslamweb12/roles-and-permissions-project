<div>
    <form wire:submit.prevent="submit" method="POST" >

      {{$slot}}
        <button type="submit" class="btn btn-primary w-100">@include('enhancing.loading',['buttonName'=>'login'])</button>
    </form>
</div>
