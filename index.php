<?php
include_once "inc/header.php";
?>



<div class="hero-wrap ftco-degree-bg" style="background-image: url('assets/images/bg_1.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
            <div class="col-lg-8 ftco-animate">
                <div class="text w-100 text-center mb-md-5 pb-md-5">
                    <h1 class="mb-4"> Trouvez le co-voiturage parfait pour vos festivals </h1>
                    <p style="font-size: 15px;">Ne manquez plus vos festivals préférés à cause de problèmes de transport
                        ! Rejoignez la communauté FestiDrive dès maintenant et bénéficiez d'une solution pratique,
                        économique et écologique pour vos déplacements vers les festivals en France.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-no-pt bg-light">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-12	featured-top">
                <div class="row no-gutters">
                    <div class="col-md-8 d-flex align-items-center">
                        <div class="services-wrap rounded-right w-100">
                            <h3 class="heading-section mb-4">Une meilleure façon de louer vos voitures parfaites</h3>
                            <div class="row d-flex mb-4">
                                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                    <div class="services w-100 text-center">
                                        <div class="icon d-flex align-items-center justify-content-center"><span
                                                class="flaticon-route"></span></div>
                                        <div class="text w-100">
                                            <h3 class="heading mb-2">Choisissez votre lieu de prise en charge</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                    <div class="services w-100 text-center">
                                        <div class="icon d-flex align-items-center justify-content-center"><span
                                                class="flaticon-handshake"></span></div>
                                        <div class="text w-100">
                                            <h3 class="heading mb-2">Sélectionnez la meilleure offre</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                    <div class="services w-100 text-center">
                                        <div class="icon d-flex align-items-center justify-content-center"><span
                                                class="flaticon-rent"></span></div>
                                        <div class="text w-100">
                                            <h3 class="heading mb-2">Réservez votre voiture de location </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <p><a href="car.php" class="btn btn-primary py-3 px-4"> Réserver la voiture idéale</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>


<section class="ftco-section ftco-no-pt bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <span class="subheading">Prêt à embarquer pour un covoiturage ?</span>
                <h2 class="mb-2">Nos CoVoiturages</h2>
            </div>
        </div>
        <?php
            $table_name = "covoiturages";
            $reponse = $su->getNames($table_name);
            if($reponse->num_rows > 0)
            {?>
        <div class="row">
            <?php  while($row = $reponse->fetch_assoc()) // Renvoit les valeurs de la bdd
                    // $row['id']$row['type']$row['date_aller']$row['nombre_places']src="../uploads/<?=$row['photo']"
            { ?>
            <div class="col-md-4">
                <div class="car-wrap rounded ftco-animate">
                    <div class="img rounded d-flex align-items-end"
                        style="background-image: url(uploads/<?=$row['photo']?>);">
                    </div>
                    <div class="text">
                        <h2 class="mb-0"><a href="car-single.php?id=<?=$row['id']?>"><?=$row['type']?></a></h2>
                        <div class="d-block covoit mb-3">
                            <span class="d-flex">
                                <p class="price "><b>Date de départ : </b></p>
                                <p class=" ml-2 mb-0"><?=$row['date_retour']?></p>
                            </span>
                            <span class="d-flex">
                                <p class="price "><b>Date de retour : </b></p>
                                <p class="ml-2 mb-0"><?=$row['date_retour']?></p>
                            </span>
                            <span class="d-flex">
                                <p class="price "><b>Places disponibles : </b></p>
                                <p class="ml-2 mb-0"> <?=$row['nombre_places']?> </p>
                            </span>
                        </div>
                        <p class="d-flex mb-0 d-block">
                            <a href="car-single.php?id=<?=$row['id']?>" class="btn btn-secondary py-2 ml-1">Details</a>
                        </p>
                    </div>
                </div>
            </div>
            <?php }
            }
        ?>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <span class="subheading">Êtes-vous prêt à plonger dans l'univers de la festivalité ?</span>
                <h2 class="mb-2">Nos Festivals </h2>
            </div>
        </div>
        <?php
            $table_name = "festivals";
            $reponse = $su->getNames($table_name);
            if($reponse->num_rows > 0)
            {?>
        <div class="row">
            <?php  while($row = $reponse->fetch_assoc()) // Renvoit les valeurs de la bdd
                    // $row['id']$row['type']$row['date_aller']$row['nombre_places']src="../uploads/<?=$row['photo']"
            { ?>
            <div class="col-md-4">
                <div class="car-wrap rounded ftco-animate">
                    <div class="img rounded d-flex align-items-end"
                        style="background-image: url(uploads/<?=$row['photo']?>);">
                    </div>
                    <div class="text">
                        <h2 class="mb-0"><a href="festival-single.php?id=<?= $row['id'] ?>"><?= $row['nom'] ?></a></h2>
                        <div class="d-flex">
                            <p class="price "><?= $row['date'] ?></p>
                        </div>
                        <div class="d-block covoit mb-3">
                            <span class="cat"><b>Adresse : </b><?= $row['localisation'] ?></span>
                            <span class="cat"> <b>Tél :</b> <?= $row['telephone'] ?></span>
                            <span class="cat"> <b>Mail :</b> <?= $row['email'] ?> </span>
                        </div>
                        <p class="d-flex mb-0 d-block">
                            <a href="festival-single.php?id=<?= $row['id'] ?>"
                                class="btn btn-secondary py-2 ml-1">Details</a>
                        </p>
                    </div>
                </div>
            </div>
            <?php }
            }
        ?>
        </div>
    </div>
</section>


<section class="ftco-section">
    <div class="container">
        <div class="trois row">
            <div class="col-md-4 ">
                <div class="services services-2 w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span
                            class="flaticon-wedding-car"></span></div>
                    <div class="text w-100">
                        <h3 class="heading mb-2"><b>Facile et pratique</b></h3>
                        <p>Recherchez rapidement des trajets disponibles et trouvez des partenaires de covoiturage pour
                            vous rendre aux festivals en toute simplicité.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="services services-2 w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span
                            class="flaticon-transportation"></span></div>
                    <div class="text w-100">
                        <h3 class="heading mb-2"><b>Rencontrez des festivaliers</b></h3>
                        <p>Faites de nouvelles rencontres, partagez des moments uniques et créez des souvenirs
                            inoubliables en compagnie d'autres festivaliers passionnés.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="services services-2 w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span
                            class="flaticon-car"></span></div>
                    <div class="text w-100">
                        <h3 class="heading mb-2"><b>Écologique</b></h3>
                        <p>Réduisez votre impact environnemental en optant pour le covoiturage. Ensemble, nous pouvons
                            contribuer à préserver la planète tout en profitant des festivals.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-counter ftco-section img bg-light" id="section-counter">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                    <div class="text text-border d-flex align-items-center">
                        <strong class="number" data-number="60">0</strong>
                        <span>Festivaliers <br>Inscrits</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                    <div class="text text-border d-flex align-items-center">
                        <strong class="number" data-number="1090">0</strong>
                        <span>Totals <br>Voitures</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                    <div class="text text-border d-flex align-items-center">
                        <strong class="number" data-number="2590">0</strong>
                        <span>Totals <br> Festivals</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                    <div class="text d-flex align-items-center">
                        <strong class="number" data-number="67">0</strong>
                        <span>Festivaliers <br>Propriétaires</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?php
include_once "inc/footer.php";
?>