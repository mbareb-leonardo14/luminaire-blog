@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row mb-3">
            <div class="col-8">
                <h1 class="display-6 fw-bold my-4">{{ $post->title }}</h1>

                <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-left"></i> Back to posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><i class="bi bi-pencil-square"></i>
                </a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger border-0" onclick="return confirm('r u sure?')">
                        <i class="bi bi-trash-fill"></i>
                    </button>
                </form>

                @if ($post->image)
                    <div style="max-height: 360px; overflow: hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-fluid mt-3">
                    </div>
                @else
                    <img src="https://source.unsplash.com/800x300?{{ $post->category->name }}" alt=""
                        class="img-fluid mt-3">
                @endif

                <p><a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none"><span
                            class="text-decoration-none badge text-bg-secondary">{{ $post->category->name }}</span></a></p>
                <article class="my-3">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection
