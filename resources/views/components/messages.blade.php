<div class="toast-wrapper position-absolute px-2 mw-100" style="z-index: 11">
    <div class="toast-container">
        @if($errors->any())
            @foreach($errors->all() as $error)
                <x-message type="danger" :message="$error"/>
            @endforeach
        @endif
        @if(session('success', false))
            @php
            $data = session('success');
            if (!is_array($data)) {
                $data = [$data];
            }
            @endphp
            @foreach ($data as $msg)
                <x-message type="success" :message="$msg"/>
            @endforeach
        @endif
    </div>
</div>

