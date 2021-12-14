<?php
require_once "mydbms.php";
$dbname="h50wxc";
$con=connect("root","",$dbname);



if (!isset($_GET['order'])) {
    $order = 0;
} else {
    $order = $_GET['order'];
}

if ($order == 0) {
    $orderstring = " order by id";
} else {
    $orderstring = " order by nev";
}

$limit = 4;
$page = isset($_GET['page']) ? abs((int)$_GET['page']) : 1;

$query="select count(*) from bonsai";

$res=mysqli_query($con,$query) or die ("Nem sikerült".$query);
$list=mysqli_fetch_row($res);
$c = array_shift($list);

$maxpage = ceil($c / $limit);

if ($page <= 0)
{
  $page = 1;
}

else if ($page >= $maxpage)
     {
       $page = $maxpage;
	 }

$offset = ($page-1)*$limit;
$query="select id,nev,ar,fajta,tipus,magassag,eletkor,img from bonsai";
$query.=$orderstring;
$query.=" limit $offset,$limit";




$result=mysqli_query($con,$query) or die ("Nem sikerült ".$query);

echo "<table width=100% border=1><tr class=title><td><a href=index.php?d=".$_GET['d']."&order=0>Felvitel szerint</a></td><td>
<a href=index.php?d=".$_GET['d']."&order=1>Nev szerint</a> </td></tr></table>";

while (list($id,$nev,$ar,$fajta,$tipus,$magassag,$eletkor,$kep)=mysqli_fetch_row($result))
{
	
 echo "<div style='width:200px; height:420px; text-align:center; border:1pt solid white; float:left; margin:5px;'>";
        echo "<img src=" . $kep . " alt=".$kep." width=200 height=200 />";
        echo "<p>Név:" . $nev . "</p>";
        echo "<p>Ár: " . $ar . "</p>";
        echo "<p>Fajta: " . $fajta . "</p>";
        echo "<p>Típus: " . $tipus . "</p>";
        echo "<p>Magasság: " . $magassag . "</p>";
        echo "<p>Életkor: " . $eletkor . "</p>"; 
        echo '</div>';
    
}

echo '<hr style="clear:both;">';

$linklimit = 4; 
$linklimit2 = $linklimit / 2; 
$linkoffset = ($page > $linklimit2) ? $page - $linklimit2 : 0; 
$linkend = $linkoffset+$linklimit; 

if ($maxpage - $linklimit2 < $page)
{
   $linkoffset = $maxpage - $linklimit;
   if ($linkoffset < 0)
   {
      $linkoffset = 0;
   }
   $linkend = $maxpage;
}

if ($page > 1)
{
  echo "<a href='index.php?d=".$_GET['d']."&order=".$order."&page=1'>  Első  </a>";
  echo "<a href='index.php?d=".$_GET['d']."&order=".$order."&page=".($page-1)."'>  Előző  </a>";
  
}


 for ($i=1+$linkoffset; $i <= $linkend and $i <= $maxpage; $i++)
 {
    $style = ($i == $page) ? "color: white;" : "color: blue;";
    echo "<a href='index.php?d=".$_GET['d']."&order=".$order."&page=$i' style='$style'>$i. oldal  </a>";
 }

 if ($page < $maxpage)
 {
   echo "<a href='index.php?d=".$_GET['d']."&order=".$order."&page=".($page+1)."'>  Következő  </a>";
   echo "<a href='index.php?d=".$_GET['d']."&order=".$order."&page=".$maxpage."'>  Utolsó  </a>";
   }

   
mysqli_close($con);

    