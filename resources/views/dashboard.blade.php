@extends('main')

<nav class="navbar navbar-light bg-light justify-content-between px-4">
  <a class="navbar-brand">TODO</a>
  <button class="btn btn-outline-success my-2 my-sm-0" id="logout">Log Out</button>
</nav>

<div class="container m-3">
    <div class="row">
        <div class="col">
            <h4>Tasks</h4>
        </div>
        <div class="col-11">
            <a id="newTask" data-bs-toggle="modal" data-bs-target="#taskModal" role="button"><img class="pointer" src="{{ asset('images/plus.png') }}" width="30px"></a>
        </div>
    </div>
  <div class="row mt-3">
    <div class="col-sm">
        <div class="card p-2">
            Todo
            @foreach($todos as $todo)
                @include('card', ['task' => $todo])
            @endforeach
        </div>
    </div>
    <div class="col-sm">
        <div class="card p-2">
            Ongoing
            @foreach($ongoings as $ongoing)
                @include('card', ['task' => $ongoing])
            @endforeach
        </div>
    </div>
    <div class="col-sm">
        <div class="card p-2">
            Completed
            @foreach($completeds as $completed)
                @include('card', ['task' => $completed])
            @endforeach
        </div>
    </div>
  </div>
</div>

@include('modals.task')
