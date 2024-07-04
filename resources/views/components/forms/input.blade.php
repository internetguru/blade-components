@props([
    'type' => 'text',
    'name',
    'value',
    'options' => [],
    'rows' => 10,
    'disabled' => false,
    'checked' => false,
])

<div @class(["mt-3", "form-floating" => $type !== "checkbox"])>
    @if ($type === 'textarea')
        <textarea
            class="form-control @error($name) is-invalid @enderror"
            id="{{ $name }}"
            name="{{ $name }}"
            placeholder="{{ $slot }}"
            style="height: {{ $rows }}rem"
            @if ($disabled) disabled @endif
            {{ $attributes }}
        >{{ old($name) ?? $value ?? '' }}</textarea>
    @elseif ($type === 'select')
        <select
            class="form-control @error($name) is-invalid @enderror"
            id="{{ $name }}"
            name="{{ $name }}"
            placeholder="{{ $slot }}"
            @if ($disabled) disabled @endif
            {{ $attributes }}
        >
            @foreach($options as $option)
                @if (is_array($option))
                    <option value="{{ $option['id'] }}" @if($option['id'] == (old($name) ?? $value)) selected @endif>{{ $option['name'] }}</option>
                @else
                    <option value="{{ $option }}" @if($option == (old($name) ?? $value)) selected @endif>{{ $option }}</option>
                @endif
            @endforeach
        </select>
    @elseif ($type == 'checkbox')
        <label><input
            type="{{ $type }}"
            class="form-check-input me-2 @error($name) is-invalid @enderror"
            id="{{ $name }}"
            name="{{ $name }}"
            @if (old($name) ?? $checked) checked @endif
            @if ($disabled) disabled @endif
            {{ $attributes }}
        />{{ $slot }}</label>
    @else
        <input
            type="{{ $type }}"
            class="form-control @error($name) is-invalid @enderror"
            id="{{ $name }}"
            name="{{ $name }}"
            placeholder="{{ $slot }}"
            value="{{ old($name) ?? $value ?? '' }}"
            @if ($disabled) disabled @endif
            {{ $attributes }}
        />
    @endif
    @if ($type !== 'hidden')
        @if ($type !== 'checkbox')
            <label for="{{ $name }}">{{ $slot }}@if($type == 'select')▼@endif</label>
        @endif
        @error($name)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    @endif
</div>