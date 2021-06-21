<div @error($name) class="error" @enderror>
    <div class="flex justify-between @error($name) text-red-500 @enderror">
        <label for="{{ $name }}">{{ $message }}</label>
        @error($name) <p>{{ $message }}</p> @enderror
    </div>
    <input class="w-full p-4 mb-2 text-base rounded outline-none border border-solid @error($name) border-red-400 bg-red-50 text-gray-900 @else text-blueGray border-blueGray bg-blueGray-lightest @enderror"  type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" value="{{ $value }}" placeholder="{{ $placeholder }}">
</div>

