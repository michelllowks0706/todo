@extends('main')

<div class="px-5">
<div class="card m-5 w-50 p-5 mx-auto align-items-center">
    <h1><strong>TODO</strong></h1>
    <h3>Log In</h3>
    <form id="login_form">
        @include('auth._form')
        <div class="py-4">
            <button class="btn btn-primary" id="signInBtn">Log In</button>
        </div>
        <div>
           <a href="{{ route('registration') }}">Don't have an account? Sign up here!</a>
        </div>
    </form>
</div>