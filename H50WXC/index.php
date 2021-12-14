<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Kezdőlap</title>
        <meta http-equiv="content-type" content="text/HTML; charset=UTF-8">
	<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8">
	<meta http-equiv="content-style-type" content="text/css">
        <link rel="stylesheet" type="text/css" href="styles/stylef.css">
    </head>
    <body>
        <?php require "mydbms.php"; ?>
	<?php
        session_start();
        if (isset($_SESSION['user'])) {
            echo "<div class=page>";
            echo "<div class=header>";
            include "header.php";
            echo "</div>";
            echo "<div class=menu>";
            include "menu.php";
            echo "</div>";
            echo "<div class=content>";
            include "content.php";
            echo "</div>";
            echo "<footer class=foot>Boda Viktor - H50WXC<br/></footer>";
            echo "</div>";
        } else {
            echo '<meta http-equiv="refresh" content="0; URL=loginpage.html">';
        }
        ?>
    </body>
</html>
