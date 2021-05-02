<div @if($error) class="error" @endif>
    <label for="{{ $name }}">{{ $message }}</label>
    <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" value="{{ $value }}" placeholder="{{ $placeholder }}">
</div>
