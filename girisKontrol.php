<?php

$email = $_POST['email'];
$password = $_POST['password'];

if ($email == "b23121075@ogr.sakarya.edu.tr" && $password == "123") {
	header("Location: giris.php?login=1");
} else {
	header("Location: giris.php?login=0");
}
