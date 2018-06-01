<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" type="image/png" href="images/avatar.png"/>
        <link rel="stylesheet" type="text/css" href="./cssmap-europe/cssmap-europe.css" media="screen" />
        <script src="./js/jquery.vmap.js"></script>
        <script src="./js/jquery.vmap.europe.js"></script>
        <link href="dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

        <title>Europa Peace</title>
    </head>

    <body class="text-center">
        <img src = "images/sigla3.png" >
        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
            <header class="masthead mb-auto">

                <div class="inner">
                    <?php
                    session_start();
                    if (isset($_SESSION["user"]))
                        echo $_SESSION["user"];
                    ?>

                    <nav class="nav nav-masthead justify-content-center">
                        <a class="nav-link active" href="acasa.php">Acasa</a>
                        <a class="nav-link" href="vizcerere.php">Vizualizare cerere</a>
                        <a class="nav-link" href="trimiterecerere.php">Trimitere cerere</a>
                        <a class="nav-link" href="/IP Project/CHAT/index2.php">Conferinta</a>
                        <a class="nav-link" href="rapoarte.php">Rapoarte</a>
                        <a class="nav-link" href="inregistrare.php">Inregistrare</a>
                        <a class="nav-link" href="index.php">Autentificare</a>
                        <a class="nav-link" href="logout.php">Logout</a>
                    </nav>
                </div>
            </header>

            <div id="map-europe">
                <ul class="europe">
                    <li class="eu1"><a href="./tari/albania.php">Albania</a></li>
                    <li class="eu2"><a href="./tari/andorra.php">Andorra</a></li>
                    <li class="eu3"><a href="./tari/austria.php">Austria</a></li>
                    <li class="eu4"><a href="./tari/belarus.php">Belarus</a></li>
                    <li class="eu5"><a href="./tari/belgia.php">Belgia</a></li>
                    <li class="eu6"><a href="./tari/bosnia.php">Bosnia and Herzegovina</a></li>
                    <li class="eu7"><a href="./tari/bulgaria.php">Bulgaria</a></li>
                    <li class="eu8"><a href="./tari/croatia.php">Croatia</a></li>
                    <li class="eu9"><a href="./tari/cipru.php">Cipru</a></li>
                    <li class="eu10"><a href="./tari/cehia.php">Cehia</a></li>
                    <li class="eu11"><a href="./tari/danemarca.php">Danemarca</a></li>
                    <li class="eu12"><a href="./tari/estonia.php">Estonia</a></li>
                    <li class="eu13"><a href="./tari/franta.php">Franta</a></li>
                    <li class="eu14"><a href="./tari/finlanda.php">Finlanda</a></li>
                    <li class="eu15"><a href="./tari/georgia.php">Georgia</a></li>
                    <li class="eu16"><a href="./tari/germania.php">Germania</a></li>
                    <li class="eu17"><a href="./tari/grecia.php">Grecia</a></li>
                    <li class="eu18"><a href="./tari/ungaria.php">Ungaria</a></li>
                    <li class="eu19"><a href="./tari/islanda.php">Islanda</a></li>
                    <li class="eu20"><a href="./tari/irlanda.php">Irlanda</a></li>
                    <li class="eu21"><a href="./tari/san-marino.php">San Marino</a></li>
                    <li class="eu22"><a href="./tari/italia.php">Italia</a></li>
                    <li class="eu23"><a href="./tari/kosovo.php">Kosovo</a></li>
                    <li class="eu24"><a href="./tari/latvia.php">Latvia</a></li>
                    <li class="eu25"><a href="./tari/liechtenstein.php">Liechtenstein</a></li>
                    <li class="eu26"><a href="./tari/lituania.php">Lithuania</a></li>
                    <li class="eu27"><a href="./tari/luxemburg.php">Luxemburg</a></li>
                    <li class="eu28"><a href="./tari/macedonia.php">Macedonia <abbr title="The Former Yugoslav Republic of Macedonia">(F.Y.R.O.M.)</abbr></a></li>
                    <li class="eu29"><a href="./tari/malta.php">Malta</a></li>
                    <li class="eu30"><a href="./tari/moldova.php">Moldova</a></li>
                    <li class="eu31"><a href="./tari/monaco.php">Monaco</a></li>
                    <li class="eu32"><a href="./tari/montenegro.php">Montenegro</a></li>
                    <li class="eu33"><a href="./tari/olanda.php">Olanda</a></li>
                    <li class="eu34"><a href="./tari/norvegia.php">Norvegia</a></li>
                    <li class="eu35"><a href="./tari/polonia.php">Polonia</a></li>
                    <li class="eu36"><a href="./tari/portugalia.php">Portugalia</a></li>
                    <li class="eu37"><a href="./tari/romania.php">Romania</a></li>
                    <li class="eu38"><a href="./tari/rusia.php">Rusia</a></li>
                    <li class="eu39"><a href="./tari/serbia.php">Serbia</a></li>
                    <li class="eu40"><a href="./tari/slovacia.php">Slovacia</a></li>
                    <li class="eu41"><a href="./tari/slovenia.php">Slovenia</a></li>
                    <li class="eu42"><a href="./tari/spania.php">Spania</a></li>
                    <li class="eu43"><a href="./tari/suedia.php">Suedia</a></li>
                    <li class="eu44"><a href="./tari/elvetia.php">Elvetia</a></li>
                    <li class="eu45"><a href="./tari/turcia.php">Turcia</a></li>
                    <li class="eu46"><a href="./tari/ucraina.php">Ucraina</a></li>
                    <li class="eu47"><a href="./tari/anglia.php">Anglia</a></li>
                </ul>
            </div>

            <div class="harti">
                <img id="romania_map" src="tari/images/serbia.png"/>
            </div>

            <footer class="mastfoot mt-auto">
                <div class="inner">
                    <p>© Copyright 2018</p>
                </div>
            </footer>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="assets/js/vendor/popper.min.js"></script>
        <script src="dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cssmapsplugin.com/5/jquery.cssmap.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $("#map-europe").CSSMap({
                    "size": 650,
                    "mapStyle": "vintage",
                    "cities": true,
                    "tooltips": "floating-top-center",
                    "responsive": "auto"
                });
            });
        </script>
    </body>
</html>
