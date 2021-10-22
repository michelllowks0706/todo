@extends('main')

<div class="px-5">
    <div class="card m-5 w-50 p-5 mx-auto align-items-center">
        <h1><strong>TODO</strong></h1>
        <h3>Register</h3>
        <form id="register_form">
            @include('auth._form')
            <div class="py-4">
                <button class="btn btn-primary" id="signUpBtn">Sign Up</button>
            </div>
            <div>
                Already have an account? Login now!
            </div>
        </form>
    </div>
</div>