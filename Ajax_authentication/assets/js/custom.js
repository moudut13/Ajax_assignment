(function ($){
    $(document).ready(function (){
        /*Start singup or submit*/
        $('#singup_btn').submit(function (e){
            e.preventDefault();
            let email = $('#email').val();
            let username = $('#username').val();
            let password = $('#password').val();
            if(email == '' || username == '' || password == ''){
                $('.msg').html(validation('All fields are required','danger'));
            }else {
                $.ajax({
                    url: 'ajax-template/add_user.php',
                    method: 'POST',
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    success: function (data){
                        swal("Done!", "User Added Successfully!", "success");
                        $('#singup_btn')[0].reset();
                    }
                });
            }
        })
        /*End singup or submit*/

        /*Start Check Email*/
        $('input#email').blur(function (){
            let email = $(this).val();
            $.ajax({
                url: 'ajax-template/email_check.php',
                method: 'POST',
                data: {
                    email: email
                },
                success: function (data){
                   if (data != null){
                       $("#show_email").html(data);
                   }else {
                       $("#show_email").html(data);
                   }
                }
            });
        });
        /*End Check Email*/


    })
})(jQuery)