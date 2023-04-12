<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    @vite(['resources/css/home.css'])
    @vite(['resources/js/main.js'])
<title>Тестовое задание</title>
</head>

<body>
<div class="col-md-8 order-md-1">
<h4 class="mb-3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Форма регистрации</font></font></h4>
<form id="customerForm" action="/home/submit" method="POST">
    @csrf
    <span id="error-msg">
        <div class="alert alert-danger print-error-msg" style="display:none"><ul></ul></div>
    </span>
    <div class="alert alert-success print-success-msg" style="display:none"><ul></ul></div>
    <span id="success-msg">
        <div class="row">
        <div class="col-md-6 mb-3">
            <label for="first_name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Имя</font></font></label>
            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="" value="">
        </div>
        <div class="col-md-6 mb-3">
            <label for="last_name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Фамилия</font></font></label>
            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="" value="">
        </div>
    </div>

    <div class="mb-3">
        <label for="email"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Электронная почта </font></font></label>
        <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com">
    </div>

    <div class="mb-3">
        <label for="password"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Пароль</font></font></label>
        <input type="password" class="form-control" name="password" id="password">
    </div>

    <div class="mb-3">
        <label for="password_repeat"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Повтор пароля</font></font></label>
        <input type="password" class="form-control" name="password_repeat" id="password_repeat">
    </div>


    <button class="btn btn-success btn-submit" type="submit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Регистрация</font></font></button>
    </span>


</form>
</div>

<script>

// function printSuccessMsg (msg) {
//     $(".print-success-msg").find("ul").html('');
//     $(".print-success-msg").css('display','block');
//     $.each( msg, function( key, value ) {
//         $(".print-success-msg").find("ul").append('<li>'+value+'</li>');
//     });
// }
//
// function printErrorMsg (msg) {
//     $(".print-error-msg").find("ul").html('');
//     $(".print-error-msg").css('display','block');
//     $.each( msg, function( key, value ) {
//         $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
//     });
// }
//
// $(document).ready(function() {
//     // $('#customerForm').on('submit',(function(e) {
//     $(".btn-submit").click(function(e){
//         e.preventDefault();
//
//         var $form = $(this);
//         url = $form.attr('action');
//         var email = $('#email').val();
//         var first_name = $('#first_name').val();
//         var last_name = $('#last_name').val();
//         var password = $('#password').val();
//         var password_repeat = $('#password_repeat').val();
//         var _token = $("input[name='_token']").val();
//
//         $.ajaxSetup({
//             headers: {
//                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//             }
//         });
//
//         $.ajax({
//             type:"POST",
//             url: url,
//             dataType: 'json',
//             encode  : true,
//             data:{
//                 _token: _token,
//                 first_name:first_name,
//                 last_name:last_name,
//                 password:password,
//                 password_repeat:password_repeat,
//                 email:email,
//             },
//
//             success:function(data) {
//                 if ($.isEmptyObject(data.error)) {
//                     printSuccessMsg(data.success);
//                     location.reload();
//                 } else {
//                     printErrorMsg(data.error);
//                 }
//             }
//         });
//     });
// });

</script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
