@if($errors->any())
    <div class="alert alert-warning" role="alert">
        @foreach($errors->all() as $error)
            {{ $error }}
        @endforeach
    </div>
@endif
