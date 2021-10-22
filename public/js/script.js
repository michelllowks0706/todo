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
                console.log(data);
            }
        });
    });

    $("#signInBtn").click(function(e){
        console.log('ahhaha')
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
                console.log(data);
            }
        });
    });
});