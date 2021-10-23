<div id="taskModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Task</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="create_task">
                    <div class="form-group py-2 my-1">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" id="description" rows="4"></textarea>
                    </div>
                    <div class="form-group py-2 my-1 hidden status">
                        <label for="status">Status</label>
                        <select class="form-control" name="status" id="status">
                            <option value="1">Todo</option>
                            <option value="2">Ongoing</option>
                            <option value="3">Completed</option>
                        </select>
                    </div>
                </form>     
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="createTask">Create</button>
                <button type="button" class="btn btn-primary hidden" id="editTask" data-id="">Update</button>
            </div>
        </div>
    </div>
</div>