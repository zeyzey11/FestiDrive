<?php
include "inc/header.php";
include "inc/sidebar.php";
?>
<?php 
	//update name
	if (isset($_POST['submit'])) {
		
		$update = $su->updateDataCovoi($_POST);
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
                        <h5 class="card-title">Modifier un covoiturage</h5>

                        <!-- General Form Elements -->
                        <form action="" method="post" enctype="multipart/form-data">

                            <?php 
							if(isset($_GET['id'])){
								$id = intval($_GET['id']);
							}
							else{
								echo "erreur";
							}
							$table_name = "covoiturages";
							$reponse = $su->getNameById($id, $table_name);
							if($reponse->num_rows > 0)
							{
								while($row = $reponse->fetch_assoc()){// Renvoit les valeurs de la bdd
								
                            ?>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-3 col-form-label">Véhicule</label>
                                <div class="col-sm-9">
                                    <input type="text" name="type" value="<?=$row['type'] ?>" class="form-control"
                                        require>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="places" class="col-sm-3 col-form-label">Nombre de places
                                </label>
                                <div class="col-sm-9">
                                    <input name="nombre_places" type="text" value="<?=$row['nombre_places'] ?>"
                                        class="form-control" require>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Date d'allée</label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?=$row['date_aller'] ?>" name="date_aller"
                                        class="form-control" require>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Photo</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="photo">
                                    <img src="../uploads/<?=$row['photo']?>" class="rounded-circle" style="width: 70px">
                                    <input type="text" hidden="hidden" name="old_pp" value="<?=$row['photo']?>" require>
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