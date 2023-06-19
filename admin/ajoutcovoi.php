<?php
include "inc/header.php";
include "inc/sidebar.php";
?>
<?php

if (isset($_POST['submit'])) {
    $upload = $su->uploadCovoi($_POST); 
    header("Location: listecovoi.php");
}
if (isset($upload)) {
    echo $upload;
} 
?>

<main id="main" class="main">


    <section class="section">
        <div class="row">
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ajouter un covoiturage</h5>

                        <!-- General Form Elements -->
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-3 col-form-label">Véhicule</label>
                                <div class="col-sm-9">
                                    <input type="text" name="type" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="places" class="col-sm-3 col-form-label">Nombre de places
                                </label>
                                <div class="col-sm-9">
                                    <input name="nombre_places" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Date de Depart</label>
                                <div class="col-sm-9">
                                    <input type="text" name="date_retour" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Date de Retour</label>
                                <div class="col-sm-9">
                                    <input type="text" name="date_aller" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Photo</label>
                                <div class="col-sm-9">
                                    <input type="file" name="photo" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <!-- <label class="col-sm-3 col-form-label">Submit Button</label> -->
                                <div class="col-sm-9">
                                    <input type="submit" name="submit" class="btn btn-primary" value="Envoyer">
                                </div>
                            </div>

                        </form><!-- End General Form Elements -->

                    </div>
                </div>

            </div>


        </div>
    </section>

</main><!-- End #main -->

<?php
include_once "inc/footer.php";
?>