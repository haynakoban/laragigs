@props(['tagsCSV'])

@php
    $tags = explode(',', $tagsCSV);
@endphp

<div {{ $attributes->merge(['class' => 'flex justify-start flex-wrap']) }}>
    @foreach ($tags as $tag)   
        <a href="/?tag={{ $tag }}" class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-xs px-2 py-1 text-center mr-1 mb-2">{{ $tag }}</a>
    @endforeach
</div>
