@extends('layouts.app')

@section('title', 'Register')

@section('content')

<h1>Register</h1>

<form method="POST" action="/register">

    @csrf

    <div class="mb-3">
        <label>Name</label>

        <input
            class="form-control"
            name="name"
        >
    </div>

    <div class="mb-3">
        <label>Email</label>

        <input
            class="form-control"
            type="email"
            name="email"
        >
    </div>

    <div class="mb-3">
        <label>Password</label>

        <input
            class="form-control"
            type="password"
            name="password"
        >
    </div>

    <div class="mb-3">
        <label>Confirm Password</label>

        <input
            class="form-control"
            type="password"
            name="password_confirmation"
        >
    </div>

    <button class="btn btn-success">
        Register
    </button>

</form>

@endsection