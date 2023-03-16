@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-md-nowrap align-items-center border-bottom mb-3 flex-wrap pt-3 pb-2">
        <h1 class="h2">Welcome {{ auth()->user()->name }}</h1>
        <h1></h1>
    </div>
@endsection
