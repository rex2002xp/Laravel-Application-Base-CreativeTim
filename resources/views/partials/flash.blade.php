@if (session('status'))
    <div class="alert alert-success" role="alert">
        <strong>{{ session('status') }}</strong>
    </div>
@endif