
$(document).on("click","#singup",function (){
   $.ajax({
       url:'singup.php',
       success: function (data){
           $('.app').html(data)
           all()
       }
   });
   return false;
});

$(document).on("click","#login",function (){
    $.ajax({
        url:'login.php',
        success: function (data){
            $('.app').html(data)
            all()
        }
    });
});

{
    $.ajax({
        url: 'login.php',
        success: function (data){
            $('.app').html(data)
        }
    });

}
/* sing up*/
$(document).on("submit","#singbtn",function (){
    let name = $('#name').val();
    let username = $('#username').val();
    let email = $('#email').val();
    let password = $('#password').val();
    if (name == '' || username == '' || email == '' || password == ''){
        swal("Opps!", "User Added unsuccessfully!", "error");
    }
    else {
        $.ajax({
            url: 'ajax_template/add_user.php',
            method: "POST",
            data:{
                name:name,
                username:username,
                email:email,
                password:password
            },
            success: function (data){
                swal("Congratulation!", "User Added successfully!", "success");
                $('#name').val('');
                $('#username').val('');
                $('#email').val('');
                $('#password').val('');
            }
        });
    }
    return false;
});
/* sing up*/

/* log in*/
$(document).on("submit","#login",function(){

    return false;
});
/* log in*/
