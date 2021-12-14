<?php
require 'mydbms.php';
$dbname = 'h50wxc';
        $con = connect('root','',$dbname);
if (isset($_POST['send'])) {

    $query = 'select id,nev,img from bonsai where nev="'.$_POST['old_nev'].'"';
    $result = mysqli_query($con, $query) or die('Hiba: '.mysqli_error($con));
    list($id, $name, $kep) = mysqli_fetch_row($result);
    if ($name ==$_POST['old_nev']) {
        $old_nev = $name;
        $old_nev_ = str_replace(' ', '_', $name);
        $new_nev = $_POST['new_nev'];
        $query ='update bonsai set nev ="'.$new_nev.'" where id = '.$id;
        $new_nev_ = str_replace(' ', '_', $new_nev);
        $new_path ="img/$new_nev_";
        $old_path ="img/$old_nev_";
        rename("$old_path", "$new_path");
        
    $result = mysqli_query($con, $query) or die ("Nem sikerült!".$query);
    if ($result) {
        echo'Sikerült a bonsai nevének a módosítása!';
        echo "<br/><a href=index.php?d=5>Vissza a módositáshoz</a>";
    }
        $new_kep = $kep;
        $new_kep_ = str_replace("$old_nev_", $new_nev_, $new_kep);
        $query = "update bonsai set img = '".$new_kep_."' where id = ".$id;
        $result=mysqli_query($con,$query) or die ("Nem sikerült ".$query);
    
    if(!$result) {
        echo'Nem sikerült a bonsai nevének a módosítása!';
        echo "<br/><a href=index.php?d=5>Vissza a módositáshoz</a>";
    }
    }
    else{
        echo'Nem található ilyen bonsai: '.$_POST['old_nev'];
        echo "<br/><a href=index.php?d=5>Vissza a módositáshoz</a>";
    }
}