@extends('layouts.app')

@section('content')
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Welcome</h1>
        <p class="col-md-8 fs-4">Dear friend, here you can add, edit or delete completed tasks. Just click the button below to get started.</p>
        <a href="{{route('task.create')}}"><button class="btn btn-primary btn-lg" type="button">Create my first task</button></a>
    </div>
@endsection
