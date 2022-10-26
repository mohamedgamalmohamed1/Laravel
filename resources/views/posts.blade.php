<x-layout>

    {{-- <x-slot name="content"> --}}
        @foreach ($posts as $post)
{{-- @dd($loop) --}}

<article class="{{$loop->even ? 'fooobar' : " "}}">
    <h1>
        <a href="/posts/{{ $post->slug }}">
            {!! $post->title !!}
        </a>
    </h1>

    <p>
        <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
    </p>

    <div>{!! $post->body !!}</div>

</article>
@endforeach

    {{-- </x-slot> --}}

</x-layout>
