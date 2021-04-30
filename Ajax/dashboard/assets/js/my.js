{
    $('#view').click(function () {
        $.ajax({
            url: 'view.php',
            success: function (data) {
                $('.app').html(data);
            }
        });
        return false;
    });
    $('#add').click(function () {
        $.ajax({
            url: 'add.php',
            success: function (data) {
                $('.app').html(data)
            }
        });
        return false;
    });
    $('#home').click(function () {
        $.ajax({
            url: 'home.php',
            success: function (data) {
                $('.app').html(data)
                allStudent()
            }
        });
        return false;
    });
    $.ajax({
        url: 'home.php',
        success: function (data) {
            $('.app').html(data)
            allStudent()
        }
    });
    $(document).on("submit", "#sbtn", function () {
        let name = $('#name').val();
        let username = $('#username').val();
        let email = $('#email').val();
        let cell = $('#cell').val();
        let id = $('#id').val();
        let address = $('#address').val();
        let photo = $('#photo').val();
        if (name == '' || username == '' || email == '' || cell == '' || id == '' || address == '' || photo == '') {
            swal("Opps!", "All fields are required!", "error");

        } else {
            $.ajax({
                url: 'ajax_template/add.php',
                method: "POST",
                data: {
                    name: name,
                    username: username,
                    email: email,
                    cell: cell,
                    id: id,
                    address: address,
                    photo: photo,
                },
                success: function (data) {
                    swal("Done!", "Student Added successfully!", "success");
                }
            });
        }
        return false;
    });

    function allStudent() {
        $.ajax({
            url: 'ajax_template/view.php',
            success: function (data) {
                $('#view_students').html(data)
            }

        });
    }

    allStudent();
    $(document).on("click", "a#delete-btn", function () {
        let id = $(this).attr('delete_id');
        $.ajax({
            url: 'ajax_template/delete.php',
            method: 'POST',
            data: {
                id: id
            },
            success: function (data) {
                swal({
                    title: "Are you sure?",
                    text: "Dalete Student Data!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((ddata) => {
                    if (ddata) {
                        swal({
                            title: "Done",
                            text: "Student Data delete successfully!",
                            icon: "success"
                        });
                        allStudent();
                    } else {
                        swal({
                            title: "Safe",
                            text: "Student Data safe now!",
                            icon: "success"
                        });
                    }
                });
            }
        })
        return false;
    });
    $(document).on("click","a#s_view-btn",function (){
        let id = $(this).attr('view-id');
        $.ajax({
            url:'ajax_template/single_page.php',
            method: 'POST',
            data:{
                id:id
            },
            success:function (data){
               $('.app').html(data);
            }
        });
        return false;
    });

}