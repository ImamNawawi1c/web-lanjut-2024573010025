@if(!empty($message))
<div class="alert alert-{{ $type ?? 'info' }} alert-dismissible fade show" role="alert"
    {{ $message }}
    <button typr="button" class="btn-close" data-bs-dissmiss="alert"></button>
</div>
@endif