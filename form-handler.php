<?php
$nev = $_POST['nev'];
$latogato_email = $_POST['email'];
$targy = $_POST['szoveg'];
$uzenet = $_POST['uzenet'];

$email_from = 'info@equiarmorum.com';
$email_subject = 'Uj Form Uzenet';
$email_body = "Felhaszanalo nev: $nev.\n".
                "Felhaszanalo email: $latogato_email.\n".
                    "Targy: $targy.\n".
                        "Felhaszanalo uzenet: $uzenet.\n";

$to = 'balazsdorottya22@gmail.com';

$headers = "From: $email_from \r\n";
$headers . = "Valasz: $latogato_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: kapcsolat.html");
?>