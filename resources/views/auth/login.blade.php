@extends('main')

<div class="px-5">
<div class="card m-5 w-50 p-5 mx-auto align-items-center">
    <strong>TODO</strong>
    <h3>Log In</h3>
    <form>
        <div class="form-group py-2 my-1">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="hello@example.com">
        </div>
        <div class="form-group py-2 my-1">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password">
        </div>
        <div class="py-4">
            <button type="submit" class="btn btn-primary">Log In</button>
        </div>
    </form>
</div>
</div>