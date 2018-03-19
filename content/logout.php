<?php session_start();  ?>

<?php

$_SESSION['firstname']=null;
$_SESSION['lastname']=null;
$_SESSION['id']=null;

header("Location: ../index.php");

?>