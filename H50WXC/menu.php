<?php

require_once "mydbms.php";
$dbname="h50wxc";
$con=connect("root","",$dbname);

$query="select authority from users where uname='".$_SESSION['user']."'";
$res=mysqli_query($con,$query) or die ("Hiba: ".mysqli_error($con));
list($aut)=mysqli_fetch_row($res);


if($aut=="admin")
	$query="select name,link from menu";
else
	$query="select name,link from menu where link in(1,2,6)";

$result=mysqli_query($con,$query) or die ("Hiba: ".mysqli_error($con));



echo "<table class=menutable>";
while(list($menutitle,$link)=mysqli_fetch_row($result))
{
        if($menutitle ==="profil"){$menutitle = "Profil";}
        if($menutitle ==="bonsai fak"){$menutitle = "Bonsai fák";}
        if($menutitle ==="uj bonsai fa"){$menutitle = "Új bonsai fa";}
        if($menutitle ==="bonsai fa torlese"){$menutitle = "Bonsai fa törlése";}
        if($menutitle ==="bonsai fa modositasa"){$menutitle = "Bonsai fa módosítása";}
        if($menutitle ==="kereses"){$menutitle = "Keresés";}
	echo "<tr><td><a class=menu href=index.php?d=".$link.">".$menutitle."</a></td></tr>";
}
echo "</table>";
mysqli_close($con);

