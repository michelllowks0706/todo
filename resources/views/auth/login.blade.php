@extends('main')

<div class="card m-5 p-5">
    TODO
    <h1>Login</h1>
    <form id="login_form">
        @include('auth._form')
        <button class="btn btn-primary" id="signInBtn">Sign In</button>
        Already have an account? Login now!
    </form>
</div>