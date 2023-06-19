<?php
include "inc/header.php";
include "inc/sidebar.php";
?>
<?php

if (isset($_POST['submit'])) {
    $upload = $su->uploadFesti($_POST);
    header("Location: listefesti.php");    
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
                        <h5 class="card-title">Ajouter un festival</h5>

                        <!-- General Form Elements -->
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-3 col-form-label">Nom</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nom" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-3 col-form-label">Date</label>
                                <div class="col-sm-9">
                                    <input type="text" name="date" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Localisation</label>
                                <div class="col-sm-9">
                                    <input type="text" name="localisation" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Téléphone</label>
                                <div class="col-sm-9">
                                    <input type="text" name="telephone" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" name="email" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-3 col-form-label">Photo</label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="photo" type="file" id="formFile">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="description" style="height: 100px"></textarea>
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