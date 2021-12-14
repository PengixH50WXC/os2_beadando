<?php

$cookie_name=$_SESSION["user"];
$try=$_COOKIE[$cookie_name];
$db=0;
		
foreach($_COOKIE as &$cookie){
    if ($try == $cookie) {
        $db++;
    }
}

$color="white";
if($db>1){
    $color="red";
}
echo "<header>
    <div style='width:80%; margin:auto;'>
		
            <h1 style='color:black;'>Webprog II. - H50WXC</h1></div>";
            echo "<div style='width:25%; margin:auto; padding-bottom:4px;'>";
            echo "<p style='color:black; font-size:24; margin:10px;'>User: ".$_SESSION['user']."</p>";
            echo "<form action=logout.php method=post><input type=submit name=logout value=Kijelentkezés></form></div>"; 
		
		
echo "</header>";
?>