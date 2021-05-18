<?php
    
	$serveur = "localhost";
    $bd = "compte_irm";

	try
	{
        $conn = mysqli_connect($serveur,"root" ,"",$bd);
			
	}
    catch (PDOException $e)
    {
		echo "erreur : ".$e->getMessage();
	}
