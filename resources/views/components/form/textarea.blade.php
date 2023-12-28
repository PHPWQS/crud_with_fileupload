@props([
   'holder', 'name', 'helperText' => '', 'value'
])

<div class="row mb-3">
    <textarea name="{{ $name }}" class="pl-2 rounded-lg border w-full border-gray-300 py-2" placeholder="{{ $holder }}">{{ $value }}</textarea>
    @if ($helperText)
      <div class="helper pl-3"><span class="text-sm text-gray-500">{{ $helperText }}</span></div>
    @endif

    @error($name)
      <div class="error pl-2"><span class="text-sm font-bold text-red-900">{{ $message }}</span></div>
    @enderror
</div>