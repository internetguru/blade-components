@props([
    'type',
    'message',
])

<div class="toast text-dark bg-white border-0 border-start border-{{ $type }} border-5 m-3" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false" style="max-width: 25em;">
    <div class="d-flex">
        <div class="toast-body flex-grow-1">
            {!! $message !!}
        </div>
        <button type="button" class="btn-close m-2" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
</div>
