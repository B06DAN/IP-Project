<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <!--<link rel="icon" href="favicon.ico">-->
        <link rel="shortcut icon" type="image/png" href="../images/1.png">
        <link rel="stylesheet" type="text/css" href="./cssmap-europe/cssmap-europe.css" media="screen" />

        <!-- Example Map Above  -->
        <script src="./js/jquery.vmap.js"></script>
        <script src="./js/jquery.vmap.europe.js"></script>
        <title>Suedia</title>
        <link rel="shortcut icon" type="image/png" href="images/avatar.png"/>

        <!-- Bootstrap core CSS -->
        <link href="../dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../css/style.css" rel="stylesheet">
    </head>

    <body class="text-center">
        <img src = "../images/sigla3.png" href="acasa.php">

        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
            <header class="masthead mb-auto">
                <div class="inner"></div>
            </header>

            <div>
                <img id="poza" style="width: 400px;height: 600px;" src="../tari/images/suedia.png">
            </div>

            <main role="main" class="inner cover">
                <!--<h1 class="cover-heading">EUROPA PEACE</h1>-->
                <!--<p class="lead">IMAGINE EUROPA. AICI VINE SVG</p>-->
                <!--<p class="lead">-->
                <a href="../acasa.php" class="btn btn-lg btn-secondary">< Inapoi</a>
                <!--</p>-->
            </main>

            <footer class="mastfoot mt-auto">
                <div class="inner">
                    <p>Suedia - Regions</p>
                </div>
            </footer>
        </div>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="assets/js/vendor/popper.min.js"></script>
        <script src="dist/js/bootstrap.min.js"></script>


        <!-- jQuery -->
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <!-- CSSMap SCRIPT -->
        <script type="text/javascript" src="https://cssmapsplugin.com/5/jquery.cssmap.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {

// CSSMap;
                $("#map-europe").CSSMap({
                    "size": 650,
                    "mapStyle": "vintage",
                    "cities": true,
                    "tooltips": "floating-top-center",
                    "responsive": "auto"
                });
// END OF THE CSSMap;

            });
        </script>
    </body>
</html>
