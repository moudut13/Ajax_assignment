    /*Start button*/
    /*start view button*/
    $('#view').click(function () {
        $.ajax({
            url: 'view.php',
            success: function (view) {
                $('.app').html(view);
            }
        });
        return false;
    });
    /*ent view button*/

    /*start add button*/
    $('#add').click(function () {
        $.ajax({
            url: 'add.php',
            success: function (add) {
                $('.app').html(add)
            }
        });
        return false;
    });
    /*Ent add button*/

    /*start home button*/
    $('#home').click(function (e) {
        e.preventDefault();
        $.ajax({
            url: 'home.php',
            success: function (home) {
                $('.app').html(home)
                allShowData()
            }
        });
    });
    /*end home button*/

    /*Start home no event button*/
    $.ajax({
        url: 'home.php',
        success: function (data) {
            $('.app').html(data)
        }

    });
    /*End home no event button*/
    /*End button*/

    /*Start form data and add data to database*/
    $(document).on("submit","#sbtn",function (){
        $.ajax({
            url: 'ajax_template/add.php',
            method: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (newData){
                swal("Done!", "Student Added Successfully!", "success");
                //console.log(newData);
                $('#sbtn')[0].reset();
            }
        });
        return false;
    });
    /*Ent form data and add data to database*/

    /*Start All Data Show*/
    function allShowData(){
        $.ajax({
            url: 'ajax_template/view.php',
            success:function (allData){
                $('#view_students').html(allData)
            }
        });
    }
    allShowData();
    /*End All Data Show*/

    /*Start Delete Data*/
    $(document).on('click','a#delete-btn',function (){
       let id = $(this).attr('delete_id')
        swal({
            title: "Are you sure?",
            text: "Delete Student Data!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((ddata) =>{
            if (ddata){
                $.ajax({
                    url: 'ajax_template/delete.php',
                    method: 'POST',
                    data: {
                        id: id
                    },
                    success: function (id){
                        swal("Opps!", "Student Data Delete Successfully!", "success");
                        allShowData();
                        console.log(id);
                    }
                })
            }
            else {
                swal({
                    title: "Safe!",
                    text: "Student Data Safe Now!",
                    icon: "success",
                });
            }
        });
       return false;
    });
    /*End Delete Data*/

    /*Start Select  Edit Data*/
    $(document).on('click','a#edit-btn',function (){
        let id = $(this).attr('view-id');
        $.ajax({
            url: 'ajax_template/edit.php',
            method: 'POST',
            data:{
                id:id
            },
            success: function (edit){
              $('.app').html(edit);
            }
        });
        return false;
    })
    /*End Select Edit Data*/

    /*Start Updated Data*/
    $(document).on('click','form#ubtn',function (){
       $.ajax({
           url: "ajax_template/update.php",
           method: 'POST',
           data: $(this).serialize(),
           success:function (){
              $('button#up').click(function (){
                  swal({
                      title: "YES!",
                      text: "STUDENT DATA UPDATE SUCCESSFULLY!",
                      icon: "success"
                  })
              })
           }
       });
        return false;
    });
    /*End Updated Data*/

    /*Start View*/
    $(document).on('click','#s_view-btn',function (e){
        e.preventDefault();
        let id = $(this).attr('view-id');
        $.ajax({
            url: 'view.php',
            method:'POST',
            data: {
                id:id
            },
            success: function (view){
                $('.app').html(view)
                //console.log(view);
            }

        });
    });
    /*End View*/

    /*Start Back Button*/
    $(document).on('click','#back',function (e) {
        e.preventDefault();
        $.ajax({
            url: 'home.php',
            success: function (home) {
                $('.app').html(home)
                allShowData()
            }
        });
    });
    /*End Back Button*/
    /**/
    /**/
    /**/
    /**/
