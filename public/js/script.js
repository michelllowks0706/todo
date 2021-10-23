$(document).ready(function(){
    $("#signUpBtn").click(function(e){
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $.ajax({
            type: 'POST',
            url: '/signup',
            data: $('#register_form').serialize(),
            success: function(data) {
                console.log(data)
                if (data.url) {
                    window.location = data.url;
                }
            }
        });
    });

    $("#signInBtn").click(function(e){
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $.ajax({
            type: 'POST',
            url: '/signin',
            data: $('#login_form').serialize(),
            success: function(data) {
                if (data.url) {
                    window.location = data.url;
                }
            }
        });
    });

    $('#logout').click(function(e) {
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $.ajax({
            type: 'GET',
            url: '/logout',
            success: function(data) {
                if (data.url) {
                    window.location = data.url
                }
            }
        });
    });

    $('#createTask').click(function(e) {
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $.ajax({
            type: 'POST',
            url: '/task',
            data: $('#create_task').serialize(),
            success: function(data) {
                if (data.url) {
                    window.location = data.url
                }
            }
        });
    });

    $('.edit-btn').click(function(e) {
        var description = $(e.target).closest('.card').find('.card-description').text();
        var status = $(e.target).parent().attr('data-status');
        var id = $(e.target).parent().attr('data-id');

        $('#taskModal').find('#description').val(description);
        $('#taskModal').find('#status').val(status);
        $('#taskModal').find('.status').removeClass('hidden');
        $('#taskModal').find('#editTask').removeClass('hidden');
        $('#taskModal').find('#createTask').addClass('hidden');
        $('#taskModal').find('#editTask').attr('data-id', id);
    });

    $('#newTask').click(function(e) {
        $('#taskModal').find('.status').addClass('hidden');
        $('#taskModal').find('#description').val('');
        $('#taskModal').find('#editTask').addClass('hidden');
        $('#taskModal').find('#createTask').removeClass('hidden');
    });

    $('.delete-btn').click(function(e) {
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $.ajax({
            type: 'POST',
            url: '/task/remove',
            data: { id: $(e.target).parent().attr('data-id') },
            success: function(data) {
                if (data.url) {
                    window.location = data.url
                }
            }
        });
    });

    $('#editTask').click(function(e) {
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $.ajax({
            type: 'POST',
            url: '/task/update',
            data: {
                id: $('#taskModal').find('#editTask').attr('data-id'),
                description: $('#taskModal').find('#description').val(),
                status: $('#taskModal').find('#status').val()
            },
            success: function(data) {
                if (data.url) {
                    window.location = data.url
                }
            }
        });
    });
});