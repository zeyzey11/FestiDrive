<?php
include_once "inc/header.php";
?>

<?php

if (isset($_POST['submit'])) {
    $reservationcovoit = $su->reservationcovoit($_POST);
    
}
?>

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('assets/images/bg_3.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Accueil <i
                                class="ion-ios-arrow-forward"></i></a></span> <span>Voitures détails <i
                            class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-3 bread">Voitures Détails</h1>
            </div>
        </div>
    </div>
</section>

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
	$row = $reponse->fetch_assoc()// Renvoit les valeurs de la bdd
	
?>
<section class="ftco-section ftco-car-details">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="car-details">
                    <div class="img rounded" style="background-image: url(uploads/<?=$row['photo']?>);"></div>
                    <div class="text text-center">
                        <h2><?=$row['type']?></h2>

                        <div class="row">

                            <div class="col-md d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services">
                                    <div class="media-body py-md-4">
                                        <div class="d-flex mb-3 align-items-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                    class="flaticon-car-seat"></span></div>
                                            <div class="text">
                                                <h3 class="heading mb-0 pl-3">
                                                    Places disponibles
                                                    <span><?=$row['nombre_places']?></span>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services">
                                    <div class="media-body py-md-4">
                                        <div class="d-flex mb-3 align-items-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                    class="flaticon-backpack"></span></div>
                                            <div class="text">
                                                <h3 class="heading mb-0 pl-3">
                                                    Date de départ
                                                    <span><?=$row['date_aller']?></span>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services">
                                    <div class="media-body py-md-4">
                                        <div class="d-flex mb-3 align-items-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                    class="flaticon-backpack"></span></div>
                                            <div class="text">
                                                <h3 class="heading mb-0 pl-3">
                                                    Date de retour
                                                    <span><?=$row['date_retour']?></span>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form action="" method="post">
                <input type="hidden" name="covoit_id" value="<?=$row['id']?>">
                <input type="hidden" name="user_id" value="">
                <button type="submit" class="btn btn-primary py-2 mr-1">Réserver</button>
            </form>
        </div>
    </div>
</section>
<?php }
        ?>
<?php
include_once "inc/footer.php";
?>