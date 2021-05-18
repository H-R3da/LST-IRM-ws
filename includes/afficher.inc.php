<?php
    require "dbh.inc.php";

    try 
    { 
        $db->beginTransaction();                           //debut de transactions

        $req="SELECT * FROM article";
        
        $stmt=$db->prepare($req);

        $stmt->execute();  
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach($stmt as $ligne) {
            echo implode(';', $ligne)."<br>\n";
        }   							
        $db->commit();   // Fin de transactions  et validation des 4 requettes
        $db=null;
    }
    catch (PDOException $e)
    {
        //$db->rollBack(); // dans le cas d'erreur annuler la transaction
        echo "ERREUR :".$e->getMessage();
        echo "<h3> Retourner à la page principale pour verfier que la transaction est annulée </h3>";
        echo '<a href="index.php"> page index </a>';
    }
