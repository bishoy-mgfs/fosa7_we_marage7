
$(document).ready(function () {
//    var Data;
     // alert("data");
    $('#login').click(function () {
        var email = $('#usermail').val();
        var password = $('#password').val();
        //alert(email+" "+password)
       
        $.post("../Controllers/login.php",
            {'email':email,'password':password},
        function (data) {

                        if (data==="Done")
                         {
                            $('#myDiv').html("Welcome");
                            window.location = "";
                         }
                        else
                        {
                            $('#myDiv').html("email or password error");
                        };
        });


    });
});