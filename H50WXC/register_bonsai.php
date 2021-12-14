<?php
    if(isset($_POST["send"]))  
    {
        require "mydbms.php";
        
        $filename = trim($_FILES['bonsaiimg']['name']);
        $str=$_POST["bonsainev"];
        $bonsainev=str_replace(" ", "_", $str);
        $filename = rand().$filename;
        $filename = str_replace(" ","_",$filename);
        $beirando="img/".$bonsainev."/".$filename;
        
        
        $dbname="h50wxc";
        $con=connect("root","", $dbname);
        
        $query="insert into bonsai(nev,ar,fajta,tipus,magassag,eletkor,img) values ('".$_POST['bonsainev']."',"
                .$_POST['bonsaiar'].",'".$_POST['bonsaifajta']."','".$_POST['bonsaitipus']."',".$_POST['bonsaimagassag'].",".$_POST['bonsaieletkor'].",'".$beirando."')";
	$result=mysqli_query($con,$query);
       
        if (!$result){
            if (mysqli_errno($con) == 1062) {
            echo "Ezt a fát már regisztrálták";
        } else {
            echo mysqli_errno($con) . "Hiba: " . mysqli_error($con);
        }
    }
	else{
            mkdir("img/".$bonsainev);
            move_uploaded_file ($_FILES['bonsaiimg']['tmp_name'],"img/".$bonsainev."/".$filename);
            echo "Sikeres felvétel";
            echo "<br/><a href=index.php?d=2>Vissza a felvételhez</a>";
	}
	mysqli_close($con);
            
    }
    
