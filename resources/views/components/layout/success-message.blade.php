<div>
    @if (session('success'))
        <div class="alert alert-info" role="alert">
            {{session('success')}}
        </div>
    @endif
</div>
