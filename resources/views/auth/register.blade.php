@extends('main')

<div class="card m-5 p-5">
    TODO
    <h1>Sign Up</h1>
    <form id="register_form">
        <div class="form-group py-2">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="hello@example.com">
        </div>
        <div class="form-group py-2">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        </div>
        <button class="btn btn-primary" id="signUpBtn">Sign Up</button>
        Already have an account? Login now!
    </form>
</div>