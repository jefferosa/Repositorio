@props(['disabled' => false, 'options' => [], 'textIndex' => '','keyIndex' => '', 'multiple' => false, 'selected' => ''])

<select {{ $disabled ? 'disabled' : '' }}{{ $multiple ? 'multiple' : '' }} {!! $attributes->merge(['class' => 'rounded-md shadow-sm border-gray-300
    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50']) !!}>
    @foreach($options as $option)
    <option value="{{ $keyIndex ? $option->$keyIndex : $option }}" {{ $selected == $option ? 'selected' : '' }}>{{$textIndex ? $option->$textIndex : $option}}</option>
    @endforeach
</select>
