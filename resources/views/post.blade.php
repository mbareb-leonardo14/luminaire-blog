@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col-8">
                <h1 class="display-6 fw-bold my-4">{{ $post->title }}</h1>

                <article>
                    {{-- <h5>{{ $post->author }}</h5> --}}
                    <p>
                        By : <cite><i class="bi bi-person-fill"> </i><a href="/posts?author={{ $post->author->username }}"
                                class="text-decoration-none">{{ $post->author->name }} | </a><i class="bi bi-clock"></i>
                            {{ $post->created_at->diffForHumans() }}</cite>
                    </p>
                    <div></div>
                    @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-fluid">
                    @else
                        <img src="https://source.unsplash.com/800x300?{{ $post->category->name }}" alt=""
                            class="img-fluid">
                    @endif

                    <p><a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none"><span
                                class="text-decoration-none badge text-bg-secondary">{{ $post->category->name }}</span></a>
                    </p>
                    <article class="my-3">
                        {!! $post->body !!}

                    </article>


                </article>

                <a href="/posts" class="text-decoration-none d-block mt-2"><i class="bi bi-arrow-left"></i> Back to
                    reality</a>
            </div>
        </div>
    </div>
@endsection
