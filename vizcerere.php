<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="keywords" content="keywords"/>
        <meta name="description" content="description"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"/>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <script type='text/javascript' src='js/jquery.hoverIntent.minified.js'></script>
        <script type='text/javascript' src='js/jquery.dcverticalmegamenu.1.3.js'></script>
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="fonts/css/font-awesome.css" type='text/css'>
        <link rel="stylesheet" href="fonts/css/font-awesome.min.css" type="text/css">      
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">		
        <script type="text/javascript">$('.dropdown-toggle').dropdown()</script>

        <title>Europa Peace - Vizualizare cereri</title>
        <link rel="shortcut icon" type="image/png" href="images/avatar.png"/>
    </head>
    <body>
        <img src = "images/sigla3.png" >


        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "europa";


        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT id, autor, descriere, tipul FROM cereri";
        $result = $conn->query($sql);

        if (isset($_POST['dlteBtn'])) {
            $id = $_POST['itemid'];

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "europa";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }


            $sql = "DELETE FROM cereri WHERE id=$id";

            if ($conn->query($sql) === TRUE) {
               
            } else {
                echo "Error deleting record: " . $conn->error;
            }
        }
        ?>
        <div class="container">
            <div class="row">
                <a style="float: right; margin-top: 10px;" class="btn btn-primary" href="vizcerere.php">Refresh</a>
                <?php
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <div class="col-md-3">
                            <div class="results">
                                <?php
                                echo "Cererea cu numarul: " . $row["id"] . "<br>" .
                                "Autor: " . $row["autor"] . "<br>" .
                                "Descriere: " . $row["descriere"] . "<br>" .
                                "Tipul cererii: " . $row["tipul"] . "<br>";
                                ?>
                                <?php
                                echo "<td><form id='succes' name='frmDelete' action='' method='post'><input type='hidden' name='itemid' value='" . $row['id'] . "'><input id='delete' type='submit' name='dlteBtn' value='Accept'></form>";
                                echo "<form id='alert' name='frmDelete' action='' method='post'><input type='hidden' name='itemid' value='" . $row['id'] . "'><input id='delete' type='submit' name='dlteBtn' value='Respinge'></form></td>";
                                ?>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    ?>
                    <div class="noneresults">
                        <?php
                        echo "Nu exista nici o cerere.";
                        ?>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
        <?php
        $conn->close();
        ?> 

        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $("body").on("click", "#succes", function () {
                    alert("Acceptat");
                });
            });
            $(document).ready(function () {
                $("body").on("click", "#alert", function () {
                    alert("Respins");
                });
            });
        </script>
    </body>
</html>