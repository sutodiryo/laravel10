@props(['messages'])

@if ($messages)
    {{-- <ul {{ $attributes->merge(['class' => 'text-sm text-red-600 dark:text-red-400 space-y-1']) }}> --}}
        @foreach ((array) $messages as $message)
            <span class="m--font-danger">{{ $message }}</span>
        @endforeach
    {{-- </ul> --}}
@endif