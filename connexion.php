<?php
include_once "admin/inc/authheader.php";
?>
<?php

		if (isset($_POST['submit'])) {
			$connexion = $su->userLogin($_POST);
            
		}
		if (isset($connexion)) {
			echo $connexion;
            Session::set("userid",$connexion["id"]);
            Session::set("firstname",$connexion["firstname"]);

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
                                    <h5 class="card-title text-center pb-0 fs-4">Se connecter </h5>
                                    <p class="text-center small">Veuillez mettre vos identifiants!</p>
                                </div>

                                <form class="row g-3 needs-validation" action="" method="post">

                                    <div class="col-12">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email" class=" form-control" id="email" required>
                                        <div class="invalid-feedback">Veuillez saisir votre email!</div>
                                    </div>

                                    <div class="col-12">
                                        <label for="password" class="form-label">Mot de passe</label>
                                        <input type="password" name="password" class="form-control" id="password"
                                            required>
                                        <div class="invalid-feedback">Veuillez saisir votre mot de passe!</div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" value="true"
                                                id="rememberMe">
                                            <label class="form-check-label" for="rememberMe">Se souvenir de moi.</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <input class="btn btn-primary w-100" type="submit" name="submit"
                                            value="Se connecter">
                                    </div>
                                    <div class="col-12">
                                        <p class="small mb-0">Vous n'avez pas de compte? <a href="register.php">
                                                Inscrivez vous.</a></p>
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