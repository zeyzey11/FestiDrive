<?php
include "inc/header.php";
include "inc/sidebar.php";

?>

<main id="main" class="main">


    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Liste des festivals</h5>
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col-sm-1">id</th>
                                    <th scope="col-sm-1">Nom</th>
                                    <th scope="col-sm-1">Date</th>
                                    <th scope="col-sm-1">Localisation</th>
                                    <th scope="col-sm-3">Photo</th>
                                    <th scope="col-sm-1">Email</th>
                                    <th scope="col-sm-1">Description</th>
                                    <th scope="col-sm-1">Téléphone</th>
                                    <th scope="col-sm-2">Actions</th>


                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $table_name = "festivals";
                                $reponse = $su->getNames($table_name);
                                if($reponse->num_rows > 0)
                                {
                                    while($row = $reponse->fetch_assoc()) // Renvoit les valeurs de la bdd
                                    {echo '<tr  scope="row">';
                                        echo '<td>' . $row['id'] . '</td>';
                                        echo '<td>' . $row['nom'] . '</td>';
                                        echo '<td>' . $row['date'] . '</td>';
                                        echo '<td>' . $row['localisation'] . '</td>';
                                        echo '<td>' ?>
                                <img width="70px" src="../uploads/<?=$row['photo']?>">
                                <?php '</td>';
                                        echo '<td>' . $row['email'] . '</td>';
                                        echo '<td>' . $row['description'] . '</td>';
                                        echo '<td>' . $row['telephone'] . '</td>';
                                        echo '<td>' ?>
                                <a href="updateFesti.php?id=<?=$row['id']?>" class="btn btn-success"> <i
                                        class=" bi bi-pen"></i> </a> <?php '</td>';
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
                </div>

            </div>
        </div>
    </section>

</main>
<!-- End #main ---
<?php
include_once "inc/footer.php";
?>