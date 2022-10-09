{{-- @props(['name', 'type' => 'checkbox',  'label' => '']) --}}
@dd( $attributes );



    <input 
        name="{{ $name }}" 
        type="{{ $type }}" 
        id="{{ $name }}Input" 
        
        {{ $attributes->merge(['class' => 'form-check-input','value'=>' old($name)','checked'=>'']) }}
    >
    @if($label)
    <label for="{{ $name }}Input" class="form-label">{{ $label }}</label>
    @endif

    @error($name)
        <div class="form-text text-danger">{{ $message }}</div>
    @enderror

