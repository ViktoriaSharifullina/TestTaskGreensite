function printSuccessMsg (msg) {
    $(".print-success-msg").find("ul").html('');
    $(".print-success-msg").css('display','block');
    $.each( msg, function( key, value ) {
        $(".print-success-msg").find("ul").append('<li>'+value+'</li>');
    });
}

function printErrorMsg (msg) {
    $(".print-error-msg").find("ul").html('');
    $(".print-error-msg").css('display','block');
    $.each( msg, function( key, value ) {
        $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
    });
}

$(document).ready(function() {
    // $('#customerForm').on('submit',(function(e) {
    $(".btn-submit").click(function(e){
        e.preventDefault();

        // var $form = $(this);
        // url = $form.attr('action');
        var email = $('#email').val();
        var first_name = $('#first_name').val();
        var last_name = $('#last_name').val();
        var password = $('#password').val();
        var password_repeat = $('#password_repeat').val();
        var _token = $("input[name='_token']").val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type:"POST",
            url: "/home/submit",
            dataType: 'json',
            encode  : true,
            data:{
                _token: _token,
                first_name:first_name,
                last_name:last_name,
                password:password,
                password_repeat:password_repeat,
                email:email,
            },

            success: function(data) {
                if($.isEmptyObject(data.error)){
                    $('#error-msg').val('');  // whatever is span id here
                    $("#error-msg").css("display", "none");
                    $('#success-msg').val('');  // whatever is span id here
                    $("#success-msg").css("display", "none");
                    $(".print-success-msg").find("ul").html('');
                    $(".print-success-msg").css('display','block');
                    $(".print-success-msg").find("ul").append('<li>'+data.success+'</li>');
                }else{
                    printErrorMsg(data.error);
                }
            }
        });
    });
});


