<?php
    require_once "mydbms.php";
    $dbname="h50wxc";
    $con=connect("root","",$dbname);

    $query="select id,uname,email,img from users where uname='".$_SESSION["user"]."'";
    $result=mysqli_query($con,$query) or die ("Nem sikerült ".$query);
    
    list($id,$nev,$email,$kep)=mysqli_fetch_row($result);
    {
        echo '<h2>Felhasználó adatai:</h2>';
        echo "<table><tr><td colspan=2><img src=" . $kep . " alt=".$kep." height=150/></td>";
        echo "<tr><td>Név:</td><td>" . $nev . "</td></tr>";
        echo "<tr><td>E-mail:</td><td>" . $email . "</td></tr></table>";                                           
    }
    echo '<form action="" method="post"><input type="submit" name="modify2" value="Email módosítás"></form>';

        if(isset($_POST["modify2"])){
        echo '<br/><form action="change_email.php" method="post"><input type="email" name="old_email" placeholder="Jelenlegi email" required>'
    . '<input type="email" name="new_email" placeholder="Új email" required>'
            . '<input type="submit" name="send" placeholder="Módosít"></form>';
    
    }
    echo '<form action="" method="post"><input type="submit" name="modify" value="Jelszó módosítás"></form>';
        if(isset($_POST["modify"])){
        echo '<br/><form action="change_pwd.php" method="post"><input type="password" name="old_pwd" placeholder="Jelenlegi jelszó" required>'
    . '<input type="password" name="new_pwd" placeholder="Új jelszó" required>'
            . '<input type="submit" name="send" placeholder="Módosít"></form>';
    
    }
    
    echo '<form action="" method="post"><input type="submit" name="modify3" value="Profilkép módosítás"></form>';
    if(isset($_POST["modify3"])){
        echo '<form action="change_profilkep.php" method="post" enctype=multipart/form-data>'
        . '<input type="file" name="profilkep" id="profilkep" required>'
    . '<input type="submit" name="send" placeholder="Módosít"></form>';
        
    }
    mysqli_close($con);


