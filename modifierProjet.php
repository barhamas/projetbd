<?php
        if(isset($_POST["modifier"])){
            $id=$_POST["id"];
            $description=$_POST["desc"];
            $nom=$_POST["nom"];
            $budget=$_POST["bdg"];
            $dateD=$_POST["dD"];
            $dateF=$_POST["dF"];
            $status=$_POST["st"];

            $sql="UPDATE projet set 'desc'='$description', bdg='$budget', nom='$nom',dF=$dateF,dF=$dateF,st=$status where id=$id";
            mysqli_query($connexion,$sql);
            header("location:index.php");

        }

?>

<div class="col-md-8 offset-2 mt-5">
    <form action="" method="POST">
            <input type="text" name="id" value="<?php echo $ligne[0] ?>" hidden>
        <label for="">description</label>
        <input type="text" name="desc" value="<?php echo $ligne[1] ?>" class="form-control">
        <br>
        <label for="">nom</label>
        <input type="number" name="nom" value="<?php echo $ligne[2] ?>"  class="form-control">
        <br>
        <label for="">budget</label>
        <input type="number" name="bdg" value="<?php echo $ligne[3] ?>" class="form-control">
        <br>
        <br>
        <label for="">dateDebut</label>
        <input type="date" name="dD" value="<?php echo $ligne[4] ?>" class="form-control">
        <br>
        <br>
        <label for="">dateFin</label>
        <input type="date" name="dF" value="<?php echo $ligne[5] ?>" class="form-control">
        <br>
        <br>
        <label for="">status</label>
        <input type="booleen" name="st" value="<?php echo $ligne[6] ?>" class="form-control">
        <br>
        <button type="submit" name="modifier" class="btn btn-success">Modifier</button>
        <button type="submit" name="annuler" class="btn btn-danger">Retour</button>
    </form>
</div>