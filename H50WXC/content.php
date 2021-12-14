<?php
if(!isset($_GET["d"]))
{
    $_GET["d"]=0;
    
}
switch($_GET["d"])
{
	case 1:include "profile.php"; break;
	case 2:include "bonsai.php"; break;
        case 3:include "add_bonsai.php"; break;
        case 4:include "delete.php"; break;
        case 5:include "bonsai_modifier.php"; break;
        case 6:include "kereses.php"; break;
	default: include "profile.php"; break;
}
?>
