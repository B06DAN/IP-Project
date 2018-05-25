<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $autor = $_POST['autor'];
    $descriere = $_POST['descriere'];
    $tipul = $_POST['tipul'];


    $bool = true;
    $mysqli = new mysqli("localhost", "root", "", "europa");
    if ($mysqli->connect_errno) {
        Print '<script>alert("Eroare la conectarea cu baza de date.");</script>';
    }
    $rows = $mysqli->query("SELECT * FROM cereri WHERE username = '$autor'");
    if ((isset($tipul) && $tipul == "alipire") || (isset($tipul) && $tipul == "independenta")) {
        if ($rows->num_rows != 0) {
            Print '<script>alert("Nu ati introdus corect datele, atentie la tipul cererii!");</script>';
        } else {
            $mysqli->query("INSERT INTO cereri (autor, descriere, tipul) VALUES ('$autor', '$descriere', '$tipul')");

//        Print '<script>alert("Inregistrarea s-a realizat cu succes.");</script>';
            Print '<script>window.location.assign("acasa.php");</script>';
        }
    } else {
        Print '<script>alert("Nu ati introdus corect datele, atentie la tipul cererii!");</script>';
        Print '<script>window.location.assign("trimiterecerere.php");</script>';
    }
}
?>