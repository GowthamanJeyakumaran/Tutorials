
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <script>
            $(document).ready(function () {
//$("#add_err").css('display', 'none', 'important');
                $("#login").click(function () {
                    
                    var data_ = $('#fm').serialize();
                    
                   // var username = $("#username").val();
                 //   var password = $("#password").val();
                    $.ajax({
                        type: "POST",
                        url: "ajax.php",
                        dataType: 'json',
                        data: data_,//{name:username,pwd:password}
                        success: function (html) {
                            if (html == 'true') {
//$("#add_err").html("right username or password");
                                window.location = "welcome.php";
                            }
                            else {
                                $("#add_err").css('display', 'inline', 'important');
                                $("#add_err").html("<img src='images/alert.png' />Wrong username or password");
                            }
                        },
                        error: function (jqXHR, textStatus, errorThrown) {

                        }
                    });
                    return false;
                });
            });
        </script>
    </head>
    <body>
        <h1>Login</h1>
        <form action="login.php" method="post" id="fm">
            <label for="username">Username</label>
            <input type="text" id="username" name="username"><br>
            <label for="password">Password</label>
            <input type="password" id="password" name="password"><br>
            <input type="button" name="login" value="Login" id="login">
        </form>
    </body>
</html