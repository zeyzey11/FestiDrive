<?php
include "inc/header.php";
include "inc/sidebar.php";
?>
<?php 
	//update name
	if (isset($_POST['submit'])) {
		
		$update = $su->updateDataUser($_POST);
	}
	if (isset($update)) {
		echo $update;
	}

?>


<main id="main" class="main">

    <section class="section">
        <div class="row">
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Modifier un utilisateur</h5>

                        <!-- General Form Elements -->
                        <form action="" method="post" enctype="multipart/form-data">

                            <?php 
							if(isset($_GET['id'])){
								$id = intval($_GET['id']);
							}
							else{
								echo "erreur";
							}
							$table_name = "users";
							$reponse = $su->getNameById($id, $table_name);
							if($reponse->num_rows > 0)
							{
								while($row = $reponse->fetch_assoc()){// Renvoit les valeurs de la bdd
								
                            ?>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-3 col-form-label">Prénom</label>
                                <div class="col-sm-9">
                                    <input type="text" name="prenom" value="<?=$row['firstname'] ?>"
                                        class="form-control" require>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="places" class="col-sm-3 col-form-label">Nom
                                </label>
                                <div class="col-sm-9">
                                    <input name="nom" type="text" value="<?=$row['lastname'] ?>" class="form-control"
                                        require>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" value="<?=$row['email'] ?>" name="email" class="form-control"
                                        require>
                                    <input type="hidden" name="id" value="<?=$id?>">
                                </div>
                            </div>
                            <?php }}?>
                            <div class="row mb-3">
                                <!-- <label class="col-sm-3 col-form-label">Submit Button</label> -->
                                <div class="col-sm-9">
                                    <input type="submit" name="submit" class="btn btn-primary" value="Modifier">
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