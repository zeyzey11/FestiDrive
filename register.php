<?php
include_once "admin/inc/authheader.php";
Session::set("user","Kalam");
?>
<?php

		if (isset($_POST['submit'])) {
			$inserted = $su->insertData($_POST);
            header("Location: connexion.php");
			
		}
		if (isset($inserted)) {
			echo $inserted;
		}

	?>

<main>
    <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        <div class="d-flex justify-content-center py-4">
                            <a href="index.php" class="logo d-flex align-items-center w-auto">
                                <img src="assets/img/logo.png" alt="">
                                <span class="d-none d-lg-block">FestiDrive</span>
                            </a>
                        </div><!-- End Logo -->

                        <div class="card mb-3">

                            <div class="card-body">

                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Inscription</h5>
                                    <p class="text-center small">Entrez vos données personnelles pour créer un compte
                                    </p>
                                </div>

                                <form class="row g-3 needs-validation" action="" method="post">
                                    <div class="col-12">
                                        <label for="firstname" class="form-label">Votre Prénom</label>
                                        <input type="text" name="firstname" class="form-control" id="firstname"
                                            required>
                                        <div class="invalid-feedback">Veuillez entrer votre prénom!</div>
                                    </div>

                                    <div class="col-12">
                                        <label for="lastname" class="form-label">Votre Nom</label>
                                        <input type="text" name="lastname" class="form-control" id="lastname" required>
                                        <div class="invalid-feedback">Veuillez entrer votre Nom!</div>
                                    </div>

                                    <div class="col-12">
                                        <label for="email" class="form-label">Votre Email</label>
                                        <input type="email" name="email" class="form-control" id="email" required>
                                        <div class="invalid-feedback">Veuillez entrer une adresse email valide!</div>
                                    </div>

                                    <!-- <div class="col-12">
                                        <label for="password" class="form-label">Username</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                                            <input type="text" name="password" class="form-control" id="password"
                                                required>
                                            <div class="invalid-feedback">Veu</div>
                                        </div>
                                    </div> -->

                                    <div class="col-12">
                                        <label for="password" class="form-label">Mot de passe</label>
                                        <input type="password" name="password" class="form-control" id="password"
                                            required>
                                        <div class="invalid-feedback">Veuillez entrer un mot de passe!</div>
                                    </div>
                                    <div class="col-12">
                                        <label for="confPassword" class="form-label">Confirmation du mot de passe
                                        </label>
                                        <input type="password" name="confpassword" class="form-control"
                                            id="confpassword" required>
                                        <div class="invalid-feedback">Veuillez entrer un mot de passe!</div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" name="terms" type="checkbox" value=""
                                                id="acceptTerms" required>
                                            <label class="form-check-label" for="acceptTerms"> J'accepte <a href="#">les
                                                    conditions de confidentialités</a></label>
                                            <div class="invalid-feedback">Vous devez d'abord accepter les conditions!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <input class="btn btn-primary w-100" name="submit" type="submit">
                                    </div>
                                    <div class="col-12">
                                        <p class="small mb-0">Compte existant? <a href="Connexion.php">Se
                                                connercter.
                                            </a></p>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>
</main><!-- End #main -->
<?php
include_once "admin/inc/authfooter.php";
?>