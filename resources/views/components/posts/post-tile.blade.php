@props(['post'])
{{--@dd($post->slug)--}}
<article class="flex flex-col shadow my-4">
    <!-- Article Image -->
    <a href="/posts/{{ $post->slug }}" class="hover:opacity-75">
{{--        <img src="https://source.unsplash.com/collection/1346951/1000x500?sig=1">--}}
        <img class="lg:w-full" width="1000" height="500" src="{{ $post->image('post_image', 'desktop') }}">
{{--        <img class="lg:w-full" width="1000" height="500" src="{{ $post->image('post_image', 'flexible') }}">--}}
        <img class="md:w-full" width="1000" height="500" src="{{ $post->image('post_image', 'tablet') }}">
        <img class="sm:w-full" width="1000" height="500" src="{{ $post->image('post_image', 'mobile') }}">
    </a>
    <div class="bg-white flex flex-col justify-start p-6">
        <a href="/posts/{{ $post->slug }}" class="text-blue-700 text-sm font-bold uppercase pb-4">Technology</a>
        <a href="/posts/{{ $post->slug }}" class="text-3xl font-bold hover:text-gray-700 pb-4">{{$post->title}}</a>
        <p href="/posts/{{ $post->slug }}" class="text-sm pb-3">
            By <a href="#" class="font-semibold hover:text-gray-800">{{ $post->author }}</a>, Published on {{ $post->published_at_date }}
        </p>
        <a href="/posts/{{ $post->slug }}" class="pb-6">{{ $post->description }}</a>
        <a href="/posts/{{ $post->slug }}" class="uppercase text-gray-800 hover:text-black">Continue Reading <i class="fas fa-arrow-right"></i></a>
    </div>
</article>
