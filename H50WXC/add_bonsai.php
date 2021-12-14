<!DOCTYPE html>
    <body>
        <div>
            <p>Új bonsai fa felvétele a rendszerbe:</p>
        <form name="regurlap" method="post" action="register_bonsai.php" enctype=multipart/form-data>
            <table>
                <tr><td>Kép:</td><td><input type="file" name="bonsaiimg" required></td></tr>
                <tr><td>Név:</td><td><input type="text" name="bonsainev" pattern="[A-Z ÁÉÍÓÖŐÚÜŰ áéíóöőúüű a-z]*" required></td></tr>
                <tr><td>Ár:</td><td><input type="text" name="bonsaiar" pattern="^[-0-9]+$" required></td><td> Ft</td></tr>
                <tr><td>Fajta:</td><td><input type="text" name="bonsaifajta" pattern="[A-Z ÁÉÍÓÖŐÚÜŰ áéíóöőúüű a-z]*" required /></td></tr>
                <tr><td>Típus (Pl.: Örökzöld):</td><td><input type="text" name="bonsaitipus" pattern="[A-Z ÁÉÍÓÖŐÚÜŰ áéíóöőúüű a-z]*" required /></td></tr>
                <tr><td>Magasság:</td><td><input type="text" name="bonsaimagassag" pattern="^[-0-9]+$"" required /></td></tr>
                <tr><td>Életkor:</td><td><input type="text" name="bonsaieletkor" pattern="^[-0-9]+$" required /></td></tr>
                <tr><td><input type="submit" value="Elküld" name="send"></td><td><input type="reset" value="Töröl" name="delete"></td></tr>
            </table>
        </form>
        </div>
    </body>

