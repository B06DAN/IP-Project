<?php
include("config.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Chat </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="css/style.css">

        <script>
            $(document).ready(function (e) {

            function displayChat() {

            }


            $.ajax({

            url: 'displayChat',
                    type: 'POST',
                    success: function (data) {
                    $("#chatDisplay").html(data);
                    }
            });

                    setInterval(function () {
                    displayChat();
                    }, 1000);
                    $('$senMessageBtn').click(function (e) {

            var name = $("#user_name").val();
                    var message = $("#message").val();
                    $("myChatForm")[0].reset();
                    $.ajax({

                    url: 'sendChat.php';
                            type: 'POST';
                            data: {
                            uname:name,
                                    umessage:message
                            }
                    }
                    );
            }
            );
            });

        </script>
    </head>

    <body>
        <div class="container-fluid">
            <h3 class="text-center">Chat Room</h3>
            
            <div id="chatBox">
                <div id="chatDisplay"></div> 
            </div>

            <form id="myChatForm">
                <input class="input_chat" type="text" id="user_name" placeholder="Numele dvs."><br>
                <textarea name="message" id="message" placeholder="Introduceti mesajul aici" cols="30" rows="3"></textarea><br>
                <button type="button" class="btn btn-success btn-lg" id="senMessageBtn"> Trimite mesaj</button>
            </form>
        </div>
    </body>
</html>