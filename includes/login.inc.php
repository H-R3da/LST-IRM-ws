<?php
    require "dbh.inc.php";

    try 
    { 
        if(isset($_POST['cne'])){

            $cne=$_POST['cne'];
            $pwd=$_POST['pwd'];
            
            $req="SELECT * FROM etudiant WHERE cne='$cne'AND pwd='$pwd' limit 1 ";
            $result=mysqli_query($conn, $req);
            
            if(mysqli_num_rows($result)==1){
                echo "Vous etes connecter avec le succès";
                exit();
            }
            else{
                echo"Votre CNE ou mot de passe est incorrect";
                exit();
            }
            }
        }
    catch (PDOException $e)
    {
        //$db->rollBack(); // dans le cas d'erreur annuler la transaction
        echo "ERREUR :".$e->getMessage();
        echo "<h3> Retourner à la page principale pour verfier que la transaction est annulée </h3>";
        echo '<a href="index.html"> page index </a>';
    }