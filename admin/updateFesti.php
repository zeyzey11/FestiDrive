<?php
include "inc/header.php";
include "inc/sidebar.php";
?>
<?php 
	//update name
	if (isset($_POST['submit'])) {
	
		$update = $su->updateDataFesti($_POST);
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
                        <h5 class="card-title">Modifier un festival</h5>

                        <!-- General Form Elements -->
                        <form action="" method="post" enctype="multipart/form-data">
                            <?php 
							if(isset($_GET['id'])){
								$id = intval($_GET['id']);
							}
							else{
								echo "erreur";
							}
							$table_name = "festivals";
							$reponse = $su->getNameById($id, $table_name);
							if($reponse->num_rows > 0)
							{
								while($row = $reponse->fetch_assoc()){// Renvoit les valeurs de la bdd
								
                            ?>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-3 col-form-label">Nom</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nom" class="form-control" value="<?=$row['nom']?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-3 col-form-label">Date</label>
                                <div class="col-sm-9">
                                    <input type="text" name="date" class="form-control" value="<?=$row['date']?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Localisation</label>
                                <div class="col-sm-9">
                                    <input type="text" name="localisation" class="form-control"
                                        value="<?=$row['localisation']?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Téléphone</label>
                                <div class="col-sm-9">
                                    <input type="text" name="telephone" class="form-control"
                                        value="<?=$row['telephone']?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" name="email" class="form-control" value="<?=$row['email']?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-3 col-form-label">Photo</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="photo">
                                    <img src="../uploads/<?=$row['photo']?>" class="rounded-circle" style="width: 70px">
                                    <input type="text" hidden="hidden" name="old_pp" value="<?=$row['photo']?>">
                                    <input type="hidden" name="id" value="<?=$id?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="description" style="height: 100px"
                                        value="<?=$row['description']?>"></textarea>
                                </div>
                            </div>
                            <?php }}?>

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