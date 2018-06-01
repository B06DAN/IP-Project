<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Rapoarte</title>
        <link rel="shortcut icon" type="image/png" href="../images/avatar.png"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <?php
        include('/CHAT/config.php');
        session_start();
        if (isset($_SESSION['uname'])) {
            
        } else {
            header('location:index2.php');
        }
        ?>
        <style>
            *{margin:0px; padding:0px;font-family: Helvetica, Arial, sans-serif;background-color: #333;}
            #logout{width:60px; height:20px; position:absolute; top:6px; right:20px; margin-bottom:40px; text-align:center; color:#fff}
            #container{width:45%; height:auto; position:relative; top:8px; margin:auto;border: 2px solid #fff;padding: 15px;}

            #session-name{width:100%; height:36px; margin-bottom:30px; font-size:40px; color: #fff; text-align: center;}
            .session-text{width:300px; height:30px;padding:6px 10px;margin: 8px 0;border: 1px solid #ccc;border-radius: 4px;box-sizing: border-box; font-size:24px}

            #result-wrapper{width:100%; margin:auto; height:450px;}
            #result{height:450px; color: #fff;}

            #form-container{width:100%; margin:auto; height:80px;}
            .form-text{float:left; width:85%; height:80px;}
            #comment{width:100%; height:79px; resize:none;}
            .form-btn{float:left; width:15%; height:80px;}
            #btn{border:none; height:80px; width:100%; background: #333; color: #eae9d9; font-size:22px}

            .chats{width:100%; margin-bottom:6px;}
            .chats strong{color:#6d84b4}
            .chats p{ font-size:14px; color:#aaa; margin-right:10px}
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
            $(document).ready(function ()
            {
                $(document).bind('keypress', function (e) {
                    if (e.keyCode == 13) {
                        $('#my_form').submit();
                        $('#comment').val("");
                    }
                });
            });
        </script>
        <script type="text/javascript">
            function post()
            {
                var comment = document.getElementById("comment").value;
                var name = document.getElementById("username").value;
                if (comment && name)
                {
                    $.ajax
                            ({
                                type: 'post',
                                url: 'commentajax.php',
                                data:
                                        {
                                            user_comm: comment,
                                            user_name: name
                                        },
                                success: function (response)
                                {
                                    document.getElementById("comment").value = "";
                                }
                            });
                }

                return false;
            }
        </script>
        <script>
            function autoRefresh_div()
            {
                $("#result").load("../CHAT/load.php").show();
            }

            setInterval('autoRefresh_div()', 2000);
        </script>
    </head>

    <body>
        <div id="logout">
            <a href="logout.php" style="text-decoration:none;color: #fff;"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
        </div>

        <div id="container">

            <div id="session-name">
                Rapoartele de astazi:
            </div>

            <div id="result-wrapper">
                <div id="result">
                    <?php
                    include("../CHAT/load.php");
                    ?>
                </div>			
            </div>
        </div>
    </body>
</html>