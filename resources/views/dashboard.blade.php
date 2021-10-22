@extends('main')

<nav class="navbar navbar-light bg-light justify-content-between px-4">
  <a class="navbar-brand">TODO</a>
  <button class="btn btn-outline-success my-2 my-sm-0" id="logout">Log Out</button>
  
</nav>


<div class="container m-3">
    <div class="row">
        <div class="col"><h4>Tasks</h4></div>
        <div class="col-11"><button class="btn btn-outline-success w-25" id="new">Add Task</button></div>
    </div>
  <div class="row mt-3">
    <div class="col-sm">
        <div class="card p-2">
            Todo
            <div class="card p-2">
                <div class="row">
                    <div class="col-9">Description</div>
                    <div class="col-1"><img class="pointer" src="{{ asset('images/pencil.png') }}" width="20px" style="padding-top: 5px;"></div>
                    <div class="col-2"><img class="pointer" src="{{ asset('images/delete.png') }}" width="30px"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm">
        <div class="card p-2">
            Ongoing
        </div>
    </div>
    <div class="col-sm">
        <div class="card p-2">
            Completed
        </div>
    </div>
  </div>
</div>
