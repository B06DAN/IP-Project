<!DOCTYPE html>
<html>
    <title>Login Form</title>
    <head>
        <?php
        include('../CHAT/config.php');
        ?>
        <style>
            body {
                /*background: url('1.jpg') no-repeat fixed center center;*/
                /*background-size: cover;*/
                font-family: Montserrat;
                background-color: #333333 !important;
            }

            .login-block {
                width: 320px;
                padding: 20px;
                border-radius: 5px;
                margin: 110px auto;
                background: #000;
                border-top: 5px solid #eae9d9;
            }

            .fullname,.username,.password{
                width: 100%;
                height: 42px;
                box-sizing: border-box;
                border-radius: 5px;
                border: 1px solid #ccc;
                margin-bottom: 20px;
                font-size: 14px;
                font-family: Montserrat;
                padding: 0 20px 0 50px;
                outline: none;
            }

            .fullname {
                background: #fff url('5.png') 20px top no-repeat;
                background-size: 16px 80px;
            }
            .fullname:focus {
                background: #fff url('5.png') 20px bottom no-repeat;
                background-size: 16px 80px;
            }

            .username {
                background: #fff url('4.png') 20px top no-repeat;
                background-size: 16px 80px;
            }
            .username:focus {
                background: #fff url('4.png') 20px bottom no-repeat;
                background-size: 16px 80px;
            }

            .password {
                background: #fff url('3.png') 20px top no-repeat;
                background-size: 16px 80px;
            }
            .password:focus {
                background: #fff url('3.png') 20px bottom no-repeat;
                background-size: 16px 80px;
            }

            .login-block input:active, .login-block input:focus {
                border: 1px solid #eae9d9;
            }

            .login {
                width: 100%;
                height: 40px;
                background: #eae9d9;
                box-sizing: border-box;
                border-radius: 5px;
                border: 1px solid #eae9d9;
                color: #333333;
                font-weight: bold;
                text-transform: uppercase;
                font-size: 14px;
                font-family: Montserrat;
                outline: none;
                cursor: pointer;
            }
            .login:hover {
                background: #333333;
                color: #eae9d9;
            }

            .logo{
                width:120px; 
                height:120px; 
                margin:auto;
                /*border:5px solid #fff;*/
                border-radius:50%; 
                margin-bottom: 35px;
            }

            .logo img{
                width:100%;
                height:100%;
                border-radius:50%
            } 
            #hide,#show{
                cursor:pointer
            }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $(".register-box").hide();
                $("#show").click(function () {
                    $(".login-box").hide();
                    $(".register-box").fadeIn(200);
                });
                $("#hide").click(function () {
                    $(".login-box").fadeIn(200);
                    $(".register-box").hide();
                });
            });
        </script>
    </head>
    <body>


        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <div class="login-block login-box">
            <p style="color:#fff; text-align:center; font-size:20px">Login again</p>
            <div class="logo">
                <img  src="avatar.png" href="../acasa.php"/>
            </div>
            <form action="check-login.php" method="post">
                <input type="text" placeholder="Username" id="username" name="username" class="username"/>
                <input type="password" placeholder="Password" id="password" name="password" class="password"/>
                <input type="submit" value="Log In" id="loginbutton" name="loginbutton" class="login"/>
            </form>
            <p style="text-align:center; font-size:14px">Not registered ? <strong style="color:#eae9d9" id="show" >Create an account</strong></p>
        </div>

        <div class="login-block register-box">
            <p style="color:#fff; text-align:center; font-size:20px">Register , if you want</p>
            <div class="logo">

                <img src="avatar.png"/>
            </div>
            <form action="" method="post">    
                <!--<input type="text" placeholder="Full Name" id="reg_fullname" name="reg_fullname" class="fullname"/>-->
                <input type="text" placeholder="Username" id="reg_username" name="reg_username" class="username" />
                <input type="password" placeholder="Password" id="reg_password" name="reg_password" class="password" />
                <input type="submit" value="Register" id="newreg" name="newreg" class="login"/>
            </form>
            <p style="text-align:center; font-size:14px">Have an account ? <strong style="color:#eae9d9" id="hide">Sign In</strong></p>
            <?php
            if (isset($_REQUEST["newreg"])) {
                $rf = $_POST["reg_fullname"];
                $ru = $_POST["reg_username"];
                $rp = $_POST["reg_password"];

                $q = "insert into user (regfullname,regusername,regpassword) values ('$rf','$ru','$rp')";
                header('location:chat.php');
                mysql_query($q);
            }
            ?>

        </div>


        <main role="main" class="inner cover">
            <!--<h1 class="cover-heading">EUROPA PEACE</h1>-->
            <!--<p class="lead">IMAGINE EUROPA. AICI VINE SVG</p>-->
            <!--<p class="lead">-->
            <a href="../acasa.php" class="btn btn-lg btn-secondary">< Inapoi</a>
            <!--</p>-->
        </main>
    </body>
</html>
