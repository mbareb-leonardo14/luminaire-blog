@extends('layouts.main')

@section('container')

<h1 class="display-5 my-4">Categories</h1>

<div class="container">
   <div class="row">

      @foreach ($categories as $category)
      <div class="col-md-4">
         <div class="card text-bg-dark">

            <a href="/posts?category={{ $category->slug }}">
               <img src="https://source.unsplash.com/500x400?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
            </a>

            <div class="card-img-overlay d-flex align-items-center p-0">
               <h5 class="card-title text-center flex-fill bg-opacity-75 p-3 text-bg-dark">
                  <a href="/posts?category={{ $category->slug }}" class="text-decoration-none text-white">{{ $category->name }}</a>
               </h5>
            </div>

         </div>
      </div>
      @endforeach

   </div>
</div>

@endsection