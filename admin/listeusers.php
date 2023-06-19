<?php
include "inc/header.php";
include "inc/sidebar.php";
?>
<?php

if (isset($_POST['submit'])) {
    echo "Hello";
    $delete = $su->deleteUser($_POST);
    header("Location: listeusers.php");
}
if (isset($delete)) {
    echo $delete;
} 
?>
<main id="main" class="main">

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Liste des utilisateurs</h5>
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Prénom</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Email</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php

                                
                                $table_name = "users";
                                $reponse = $su->getNames($table_name);
                                if($reponse->num_rows > 0)
                                {
                                    while($row = $reponse->fetch_assoc()) // Renvoit les valeurs de la bdd
                                     {
                                    echo '<tr  scope="row">';
                                    echo '<td>' . $row['id'] . '</td>';
                                    echo '<td>' . $row['firstname'] . '</td>';
                                    echo '<td>' . $row['lastname'] . '</td>';
                                    echo '<td>' . $row['email'] . '</td>';
                                    echo '<td>' ?><a href="updateUser.php?id=<?=$row['id']?>" class="btn btn-success">
                                    <i class=" bi bi-pen"></i> </a> <?php '</td>';
                                    echo '<td>  <form action="" method="post">
                                    <input type="hidden" name="id" value="<?=$id?>">
                                <button name="submit" type="submit" <i class=" btn btn-danger bi bi-trash"></i>

                                </button>
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