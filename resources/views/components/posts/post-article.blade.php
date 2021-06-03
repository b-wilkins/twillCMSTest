@props(['post'])

<section class="w-full md:w-2/3 flex flex-col items-center px-3">

    <article class="flex flex-col shadow my-4">
        <!-- Article Image -->
        <a href="#" class="hover:opacity-75">
{{--            /<img src="https://source.unsplash.com/collection/1346951/1000x500?sig=1">--}}
            <img class="w-full" src="{{ $post->image('post_image', 'desktop') }}">
        </a>
        <div class="bg-white flex flex-col justify-start p-6">
            <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">Technology</a>
            <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">{{ $post->title }}</a>
            <a href="#" class="text-xl font-bold hover:text-gray-700 pb-4">{{ $post->subtitle }}</a>
            <p href="#" class="text-sm pb-8">
                By <a href="#" class="font-semibold hover:text-gray-800">{{ $post->author }}</a>, Published on {{ $post->published_at_date }}
            </p>
            {!! $post->description !!}
        </div>
    </article>
</section>
