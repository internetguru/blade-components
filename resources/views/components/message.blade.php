@props([
    'type',
    'message',
])

<div class="toast show text-white bg-{{ $type }}" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
    <div class="d-flex">
        <div class="toast-body flex-grow-1">
            {!! $message !!}
        </div>
        <button type="button" class="btn-close btn-close-white m-2" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
</div>
