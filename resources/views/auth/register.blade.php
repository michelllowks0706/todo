@extends('main')

<div class="card m-5 p-5">
    TODO
    <h1>Sign Up</h1>
    <form id="register_form">
        @include('auth._form')
        <button class="btn btn-primary" id="signUpBtn">Sign Up</button>
        Already have an account? Login now!
    </form>
</div>