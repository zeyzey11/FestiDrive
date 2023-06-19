<?php
include "inc/header.php";
include "inc/sidebar.php";
?>
<main id="main" class="main">


    <div class="card-body">
        <h5 class="card-title">Liste des covoiturages</h5>
        <!-- Table with stripped rows -->
        <table class="table datatable">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Voiture</th>
                    <th scope="col">Date d'allée</th>
                    <th scope="col">Date de retour</th>
                    <th scope="col">Nombres de places restants</th>
                    <th scope="col">Photo</th>
                </tr>
            </thead>

            <tbody>
                <?php
                                $table_name = "covoiturages";
                                $reponse = $su->getNames($table_name);
                                if($reponse->num_rows > 0)
                                {
                                    while($row = $reponse->fetch_assoc()) // Renvoit les valeurs de la bdd
                                    {
                                    echo '<tr  scope="row">';
                                    echo '<td>' . $row['id'] . '</td>';
                                    echo '<td>' . $row['type'] . '</td>';
                                    echo '<td>' . $row['date_aller'] . '</td>';
                                    echo '<td>' . $row['date_retour'] . '</td>';
                                    echo '<td>' . $row['nombre_places'] . '</td>';
                                    echo '<td>' ?> <img width="70px" src="../uploads/<?=$row['photo']?>"> <?php '</td>';
                                    echo '</tr>';
                                    echo '<td>' ?><a href="updateCovoi.php?id=<?=$row['id']?>"
                    class="btn btn-success"><i class=" bi bi-pen"></i> </a> <?php '</td>';
                                    echo '<td>  
                                    <form action="" method="post">
                                    <input type="hidden" name="id" value="<?=$id?>">
                <i class=" btn btn-danger bi bi-trash"></i>

                </form>
                </td>';
                echo '</tr>';
                }
                }
                ?>
            </tbody>
        </table>
        <!-- End Table with stripped rows -->

    </div>

</main>
<!-- End #main ---
<?php
include_once "inc/footer.php";
?>