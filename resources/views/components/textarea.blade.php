@props(['label', 'rows' => '3', 'name', 'placeholder' => '', 'value' => old($name)])
<div class="mb-3">
    @if (isset($label))
        <label>{{ $label }}</label>
    @endif
    <textarea name="{{ $name }}" placeholder="{{ $placeholder }}"
        class="form-control @error($name) is-invalid @enderror" rows="{{ $rows }}">{{ $value }}</textarea>
    @error($name)
        <small class="invalid-feedback">{{ $message }}</small>
    @enderror
</div>
