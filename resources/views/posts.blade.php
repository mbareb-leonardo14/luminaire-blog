@extends('layouts.main')

@section('container')

    <h1 class="display-5 my-4">{{ $title }}</h1>

    <div class="row justify-content-end">
        <div class="col-md-6 mb-4">
            <form action="/posts" class="d-flex" role="search">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <input class="form-control me-2" type="search" placeholder="Search..." name="search"
                    value="{{ request('search') }}">
                <button class="btn btn-outline-dark" type="submit"><i class="bi bi-search"></i></button>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card text-bg-dark my-4 border-0">

            @if ($posts[0]->image)
                <div style="max-height: 500px; overflow: hidden;">
                    <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="" class="img-fluid">
                </div>
            @else
                <img src="https://source.unsplash.com/750x250?{{ $posts[0]->category->name }}" class="card-img"
                    alt="...">
            @endif
            <div class="card-img-overlay">

                <div class="position-absolute start-0 bottom-0 p-4">

                    <a href="/posts?category={{ $posts[0]->category->slug }}"><span
                            class="badge rounded-pill text-bg-dark fst-italic mb-3 bg-opacity-75 py-2 px-3">{{ $posts[0]->category->name }}</span></a>

                    <h2 class="card-title"><a href="/posts/{{ $posts[0]->slug }}"
                            class="text-decoration-none fw-bold text-white">{{ $posts[0]->title }}</a></h2>
                    {{-- <p class="card-text">{{ $posts[0]->excerpt }}</p> --}}
                    <p class="card-text mt-3"><small><a href="/posts?author={{ $posts[0]->author->username }}"
                                class="text-decoration-none"> {{ $posts[0]->author->name }} </a>|
                            {{ $posts[0]->created_at->diffForHumans() }}</small></p>

                </div>
            </div>
        </div>

        <div class="row">

            @foreach ($posts->skip(1) as $post)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="position-absolute m-3">
                            <a href="/posts?category={{ $post->category->slug }}"><span
                                    class="badge rounded-pill text-bg-dark fst-italic mb-3 bg-opacity-75 py-2 px-3">{{ $post->category->name }}</span></a>
                        </div>

                        @if ($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-fluid">
                        @else
                            <img src="https://source.unsplash.com/300x200?{{ $post->category->name }}" class="card-img-top"
                                alt="{{ $post->category->name }}">
                        @endif

                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p>
                                <small class="text-muted">
                                    By : <i class="bi bi-person-fill"></i><a
                                        href="/posts?author={{ $post->author->username }}" class="text-decoration-none">
                                        {{ $post->author->name }}</a> | <i class="bi bi-clock"></i>
                                    {{ $post->created_at->diffForHumans() }}
                                </small>
                            </p>
                            <p class="card-text">{{ $post->excerpt }}</p>
                            <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read the fucking more...</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        {{--
</div> --}}

        {{-- @foreach ($posts->skip(1) as $post)

<div class="card text-bg-dark">
   <img src="https://source.unsplash.com/300x200?{{ $post->category->name }}" class="card-img" alt="...">
   <div class="card-img-overlay">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit
         longer.</p>
      <p class="card-text"><small>Last updated 3 mins ago</small></p>
   </div>
</div>
@endforeach --}}
    @else
        <div class="position-absolute top-50 start-50 translate-middle">
            <p class="display-3 fw-bold">404 nihil</p>
        </div>
    @endif


    <div class="d-flex justify-content-end">
        {{ $posts->links() }}
    </div>

@endsection
