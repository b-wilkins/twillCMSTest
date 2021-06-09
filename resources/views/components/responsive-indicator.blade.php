@if(env('APP_DEBUG'))
    <div class="fixed bottom-0 right-0 z-50 text-xs font-bold text-black p-2">
        <span class="sm:hidden rounded px-1 bg-yellow-400 p-1">XS</span>
        <span class="hidden sm:inline-block md:hidden rounded px-1 bg-yellow-400">SM</span>
        <span class="hidden sm:hidden md:inline-block lg:hidden rounded px-1 bg-yellow-400">MD</span>
        <span class="hidden lg:inline-block xl:hidden rounded px-1 bg-yellow-400">LG</span>
        <span class="hidden xl:inline-block rounded px-1 bg-yellow-400">XL</span>
    </div>
@endif

