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
            url: '/register',
            data: $('#register_form').serialize(),
            success: function(data) {
                console.log(data);
            }
        });
    });
});