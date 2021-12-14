<?php
require 'mydbms.php';
$dbname = 'h50wxc';
        $con = connect('root','',$dbname);
if (isset($_POST['send'])) {

    $query = 'select id,nev from bonsai where nev="'.$_POST['old_nev'].'"';
    $result = mysqli_query($con, $query) or die('Hiba: '.mysqli_error($con));
    $fajta = $_POST['new_fajta'];
    list($id, $name) = mysqli_fetch_row($result);
    if ($name ==$_POST['old_nev']) {
        $query ='update bonsai set fajta ="'.$fajta.'" where id = '.$id;
    $result = mysqli_query($con, $query) or die ("Nem sikerült!".$query);
    if ($result) {
        echo'Sikerült a bonsai fajtájának a módosítása!';
        echo "<br/><a href=index.php?d=5>Vissza a módositáshoz</a>";
    }
    else {
        echo'Nem sikerült a bonsai fajtájának a módosítása!';
        echo "<br/><a href=index.php?d=5>Vissza a módositáshoz</a>";
    }
    }
    else {
        echo'Nem található ilyen bonsai: '.$_POST['old_nev'];
        echo "<br/><a href=index.php?d=5>Vissza a módositáshoz</a>";
    }
}