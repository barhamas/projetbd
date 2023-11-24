<?php
    $host="localhost";
    $user="root";
    $password="";
    $bd="projetbd";
    $connexion=mysqli_connect($host,$user,$password,$bd);
    if(!$connexion){
        echo "Erreur de connexion a la bd";
    }

  ?>