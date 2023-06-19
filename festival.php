<?php
include_once "inc/header.php";
?>
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('assets/images/festivalgirls.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Accueil <i
                                class="ion-ios-arrow-forward"></i></a></span> <span> Festivals <i
                            class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-3 bread">Choisissez un festival </h1>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section bg-light">
    <div class="container">
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

<?php
include_once "inc/footer.php";
?>