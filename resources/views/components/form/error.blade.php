@props(['name']);

@error($name)
    <span class='text-xs text-red-400 tracking-wider'>{{ $message }}</span>
@enderror
