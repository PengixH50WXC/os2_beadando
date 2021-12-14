<?php
session_start();
require 'mydbms.php';
$dbname = 'h50wxc';
        $con = connect('root','',$dbname);
if (isset($_POST['send'])) {

    $query = 'select id,uname from users where uname="'.$_SESSION['user'].'"';
    $result = mysqli_query($con, $query) or die('Hiba: '.mysqli_error($con));
    list($id, $name) = mysqli_fetch_row($result);
    if ($name ==$_SESSION['user']) {
    $kep = rand(). basename($_FILES['profilkep']['name']);
    $kep = str_replace(' ', '_', $kep);
    $filenev = "img/".$name."/".$kep;
        $query ='update users set img ="'.$filenev.'" where id = '.$id;
    $result = mysqli_query($con, $query) or die ("Nem sikerült!".$query);
    $path ="img/$name";
    $files =glob($path.'/*');
    foreach ($files as $file) {
        if (is_file($file)) {
            unlink($file);
        }
    }
    $result = mysqli_query($con, $query) or die ("Nem sikerült!".$query);
    if ($result) {
        echo'Sikerült a profilképének a módosítása!';
        echo "<br/><a href=index.php?d=1>Vissza a profilhoz</a>";
        move_uploaded_file($_FILES['profilkep']['tmp_name'], $filenev);
    }
    else {
        echo'Nem sikerült a profilképének a módosítása!';
        echo "<br/><a href=index.php?d=1>Vissza a profilhoz</a>";
    }
    }
}