<?php
require 'mydbms.php';
$dbname = 'h50wxc';
        $con = connect('root','',$dbname);
if (isset($_POST['send'])) {

    $query = 'select id,nev from bonsai where nev="'.$_POST['old_nev'].'"';
    $result = mysqli_query($con, $query) or die('Hiba: '.mysqli_error($con));
    list($id, $name) = mysqli_fetch_row($result);
    if ($name ==$_POST['old_nev']) {
    $nev = str_replace(' ', '_', $name);
    $kep = rand(). basename($_FILES['bonsaikep']['name']);
    $kep = str_replace(' ', '_', $kep);
    $filenev = "img/".$nev."/".$kep;
        $query ='update bonsai set img ="'.$filenev.'" where id = '.$id;
    $result = mysqli_query($con, $query) or die ("Nem sikerült!".$query);
    $path ="img/$nev";
    $files =glob($path.'/*');
    foreach ($files as $file) {
        if (is_file($file)) {
            unlink($file);
        }
    }
    $result = mysqli_query($con, $query) or die ("Nem sikerült!".$query);
    if ($result) {
        echo'Sikerült a bonsai képének a módosítása!';
        echo "<br/><a href=index.php?d=5>Vissza a módositáshoz</a>";
        move_uploaded_file($_FILES['bonsaikep']['tmp_name'], $filenev);
    }
    else {
        echo'Nem sikerült a bonsai képének a módosítása!';
        echo "<br/><a href=index.php?d=5>Vissza a módositáshoz</a>";
    }
    }
    else {
        echo'Nem található ilyen bonsai: '.$_POST['old_nev'];
        echo "<br/><a href=index.php?d=5>Vissza a módositáshoz</a>";
    }
}
