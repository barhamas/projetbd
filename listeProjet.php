<?php
        $sql="SELECT * FROM projet";
        $result=mysqli_query($connexion,$sql);
       // var_dump(mysqli_fetch_all($result));
?>
<div class="col-md-8 offset-2 mt-5">
    <a class="btn btn-success" href="?page=ajouter">Ajouter</a>
<table class="table table striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">code</th>
      <th scope="col">nom</th>
      <th scope="col">description</th>
      <th scope="col">budget</th>
      <th scope="col">dateD</th>
      <th scope="col">dateF</th>
      <th scope="col">status</th>



      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php while($ligne=mysqli_fetch_row($result)):?>
            <tr>
                <td><?php echo $ligne[0] ?></td>
                <td><?php echo $ligne[1] ?></td>
                <td><?php echo $ligne[2] ?></td>
                <td><?php echo $ligne[4] ?></td>
                <td><?php echo $ligne[5] ?></td>
                <td><?php echo $ligne[6] ?></td>
                <td><?php echo $ligne[7] ?></td>
                <td><?php echo $ligne[8] ?></td>




                <td>
                    <a class="btn btn-primary" href="?page=modifier&id=<?php echo $ligne[0] ?>" >Modifier</a>
                    <a class="btn btn-danger" href="?page=delete&id=<?php echo $ligne[0] ?>">Supprimer</a>
                </td>
            </tr>
    <?php endwhile ?>
  </tbody>
</table>
    
</div>