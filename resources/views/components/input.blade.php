 @props(['label' => '', 'type' => 'text', 'name', 'value' => old($name), 'placeholder' => ''])
 <div class="m-3">
     @if ($label)
         <label>{{ $label }}</label>
     @endif
     <input type="{{ $type }}" class="form-control @error($name) is-invalid @enderror"
         placeholder="{{ $placeholder }}" name="{{ $name }}" value="{{ $value }}">
     @if ($type == 'file' && $value)
         <img class="img-thumbnail" width="80" class="my-2" src="{{ asset('storage/' . $value) }}" alt="">
     @endif
     @error($name)
         <span class="invalid-feedback">{{ $message }}</span>
     @enderror
 </div>
