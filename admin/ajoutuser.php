<?php
include "inc/header.php";
include "inc/sidebar.php";
?>
<?php

if (isset($_POST['submit'])) {
    $upload = $su->uploadUser($_POST); 
    header("Location: listeuser.php");   
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
                        <h5 class="card-title">Ajouter un administrateur</h5>

                        <!-- General Form Elements -->
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-3 col-form-label">Prénom</label>
                                <div class="col-sm-9">
                                    <input type="text" name="firstname" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="places" class="col-sm-3 col-form-label">Nom
                                </label>
                                <div class="col-sm-9">
                                    <input name="lastname" type="textcdrfg" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" name="email" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="text" name="password" class="form-control">
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