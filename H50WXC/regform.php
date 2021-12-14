<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="content-style-type" content="text/css">
        <link rel="stylesheet" type="text/css" href="styles/reg_style.css">
        <title>Regisztráció</title>
    </head>
    <body>
        <div>
            <p>Belépéshez kérem regisztráljon!</p>
        <form name="regurlap" method="post" action="register.php" enctype=multipart/form-data>
            <table>
                <tr><td>Profilkép:</td><td><input type="file" name="profileimg" required></td></tr>
                <tr><td>Felhasználónév (angol abc betűi és számok):</td><td><input type="text" name="username" pattern="[A-Z a-z 0-9]*" required></td></tr>
                <tr><td>E-mail:</td><td><input type="email" name="email" required></td></tr>
                <tr><td>Jelszó: (betűt és számokat tartalmazhat)</td>
                <td><input type="password" name="passwd" pattern="[A-Z a-z 0-9]*" required /></td></tr>
                <tr><td><input type="submit" value="Elküld" name="send"></td><td><input type="reset" value="Töröl" name="delete"></td></tr>
            </table>
        </form>
        </div>
    </body>
</html>
