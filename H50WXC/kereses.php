<?php
require_once "mydbms.php";
$dbname = "h50wxc";
$con=connect("root","",$dbname);

echo "<form method=post>
<input type=search name=talalatok placeholder=kereses>
<input class='button' type=submit value=kereses></form>";

if(isset($_POST['talalatok'])){
    echo "<h2>Keresési név:".$_POST['talalatok']."<br>Találatok:</h2>";
    $query="select * from bonsai where nev like '%$_POST[talalatok]%'";

    $result=mysqli_query($con,$query) or die ("Nem sikerült ".$query);

    while (list($id,$nev,$ar,$fajta,$tipus,$magassag,$eletkor,$kep)=mysqli_fetch_row($result))
    { 
        echo "<div>";
        echo "<img src=" . $kep ." alt=". $kep ." width=200px height=250px />";
        echo "<p>Név:" . $nev . "</p>";
        echo "<p>Ár:" . $ar . "</p>";
        echo "<p>Fajta:" . $fajta . "</p>";
        echo "<p>Típus:" . $tipus . "</p>";
        echo "<p>Magasság: " . $magassag . "</p>";
        echo "<p>Életkor: " . $eletkor . "</p>";
        echo '</div>';
    }
    echo "<hr style='clear:both; margin:15px'>";
}
mysqli_close($con);