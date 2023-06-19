<?php
include_once "inc/header.php";
?>

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('assets/images/festisolidarite.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Accueil <i
                                class="ion-ios-arrow-forward"></i></a></span> <span>Festival details <i
                            class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-3 bread">Festival Details</h1>
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
$table_name = "festivals";
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
                        <!-- <span class="subheading">Cheverolet</span> -->
                        <h2><?=$row['nom']?></h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 pills">
                <div class="bd-example bd-example-tabs">
                    <div class="d-flex justify-content-center">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <!-- <li class="nav-item">
							      <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Description</a>
							    </li> -->
                        </ul>
                    </div>


                    <div>
                        <?=$row['description']?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services">
                    <div class="media-body py-md-4">
                        <div class="d-flex mb-3 align-items-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-backpack"></span>
                            </div>
                            <div class="text">
                                <h3 class="heading mb-0 pl-3">
                                    Date :
                                    <span><?=$row['date']?></span>
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
                                    class="flaticon-pistons"></span></div>
                            <div class="text">
                                <h3 class="heading mb-0 pl-3">
                                    Adresse :
                                    <span><?=$row['localisation']?></span>
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
                                    Tél :
                                    <span><?=$row['telephone']?></span>
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
                                    Mail :
                                    <span> <a target="_blank" href="www.nuitsbluesdemarnaz.fr">
                                            <?=$row['email']?></a> </span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php }
        ?>

<?php
include_once "inc/footer.php";
?>