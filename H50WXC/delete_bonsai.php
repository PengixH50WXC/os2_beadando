<?php
require 'mydbms.php';
$dbname = 'h50wxc';
        $con = connect('root','',$dbname);
if (isset($_POST['kuldes'])) {

    $query = 'select id,nev from bonsai where nev="'.$_POST['torles'].'"';
    $result = mysqli_query($con, $query) or die('Hiba: '.mysqli_error($con));
    list($id, $name) = mysqli_fetch_row($result);
    if ($name ==$_POST['torles']) {
        
    $query ='delete from bonsai where id ='.$id.'';
    $mappanev = str_replace(' ', '_', $name);
    $path ="img/$mappanev";
    $files =glob($path.'/*');
    foreach ($files as $file) {
        if (is_file($file)) {
            unlink($file);
        }
    }
    rmdir($path);
    $result = mysqli_query($con, $query) or die ("Nem sikerült!".$query);
    if ($result) {
        echo'Sikerült a bonsai törlése!';
        echo "<br/><a href=index.php?d=4>Vissza a törléshez</a>";
    }
    else {
        echo'Nem sikerült a bonsai törlése';
        echo "<br/><a href=index.php?d=4>Vissza a törléshez</a>";
    }
    }
    else {
        echo'Nem található ilyen bonsai: '.$_POST['torles'];
        echo "<br/><a href=index.php?d=4>Vissza a törléshez</a>";
    }
}