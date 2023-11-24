<?php
        if(isset($_POST["ajouter"])){
            $description=$_POST["desc"];
            $nom=$_POST["nom"];
            $budget=$_POST["bdg"];
            $dateD=$_POST["dD"];
            $dateF=$_POST["dF"];
            $status=$_POST["st"];




            $sql="INSERT INTO projet values(NULL,'$description','$budget','$nom','$dateD','$dateF','$status')";
            mysqli_query($connexion,$sql);
            header("location:index.php");

        }
?>  
<div class="col-md-8 offset-2 mt-5">
    <form action="" method="POST">

        <label for="">nom</label>
        <input type="text" name="nom" class="form-control">
        <br>
        <label for="">Description</label>
        <input type="text" name="desc" class="form-control">
        <br>
        <label for="">budget</label>
        <input type="number" name="bdg" class="form-control">
        <br>
        <br>
        <label for="">dateD</label>
        <input type="date" name="dD" class="form-control">
        <br>
        <br>
        <label for="">dateF</label>
        <input type="date" name="dF" class="form-control">
        <br>
        <br>
        <label for="">status</label>
        <input type="text" name="st" class="form-control">
        <br>
        
        <button type="submit" name="ajouter" class="btn btn-success">Ajouter</button>
        <button type="submit" name="annuler" class="btn btn-danger">Retour</button>
    </form>
</div>