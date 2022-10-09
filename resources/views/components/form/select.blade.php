@props([
    'name' => 'name',
    'list' => [],
    'selected'=>''
])
{{-- @dd($attributes); --}}
<select {{ $attributes->merge(['class' => 'form-control']) }} name={{ $name }}>

    <option value="">Please select</option>

    @forelse ($list as $key => $value)
        <option value="{{$key}}" 
        @if($selected == $key) 
        selected 
        @endif
        >
            {{$value}}
        </option>
    @empty

    @endforelse
</select>