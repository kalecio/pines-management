@props(['disabled' => false, 'options' => [], 'value' => null])

<select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm']) !!}>
    <option value="" hidden></option>
    @foreach ($options as $option)
        <option value="{{$option['value']}}" @if($value === $option['value']) selected @endif>{{$option['label']}}</option>
    @endforeach
</select>
