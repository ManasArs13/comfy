<div class="row">
    @if (session('status'))
    <div class="alert alert-success alert-dismissible mt-2" role="alert" style="text-align: center;">
        {{ session('status') }}
    </div>
    @endif
</div>