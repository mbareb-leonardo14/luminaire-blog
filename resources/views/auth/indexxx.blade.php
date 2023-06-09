@extends('layouts.main')

@section('container')

<div class="row justify-content-center mt-5">
   <div class="col-md-4">
      <main class="form-signin w-100 m-auto">
         <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
  <form>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
  </form>
  <small><a href="/register">Sign Up</a></small>
</main>
   </div>
</div>
   


@endsection