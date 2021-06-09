@php
    $alignment = $block->input('image_alignment');
    $desktop_size = $block->input('image_width_desktop') ?? 'w-full';
    $tablet_size = $block->input('image_width_tablet') ?? 'w-full';
@endphp
<div class="w-full block">
    <figure class="mb-4 w-full float-none {{ $tablet_size }} {{ $desktop_size }} {{ $alignment }}">
        <img src="{!! $block->image('image_aligned_with_paragraph', 'default') !!}" alt="" class="w-full"/>
    </figure>
    <span class="mb-4">
        {!! $block->translatedinput('paragraph') !!}
    </span>
</div>
