<div class="card p-2 my-2">
    <div class="row">
        <div class="col-9 card-description">{{ $task->description }}</div>
        <div class="col-3">
            <div class="d-flex justify-content-end">
                <a role="button" data-id="{{ $task->id }}" class="edit-btn" data-bs-toggle="modal" data-bs-target="#taskModal" data-status="{{ $task->status }}">
                    <img src="{{ asset('images/pencil.png') }}" width="20px" style="padding-top: 5px;">
                </a>
                <a role="button" data-id="{{ $task->id }}" class="delete-btn">
                    <img src="{{ asset('images/delete.png') }}" width="30px">
                </a>
            </div>
        </div>
    </div>
</div>