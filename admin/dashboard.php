<?php
include "inc/header.php";
include "inc/sidebar.php";
?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Tableau de bord</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">

                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Festivals </h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-cart"></i>
                                    </div>
                                    <div class="ps-3">
                                        <?php
                                $table_name = "festivals";
                                $reponse = $su->getNames($table_name);
                                if($reponse->num_rows > 0)
                                { $rowcount = 0;
                                    while($row = $reponse->fetch_assoc()){
                                        $rowcount++;
                                    }
                                 }
                                ?>
                                        <h6>
                                            <?=$rowcount;?>
                                        </h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->

                    <!-- Revenue Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">

                            <div class="card-body">
                                <h5 class="card-title">Covoiturage</h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-currency-dollar"></i>
                                    </div>
                                    <div class="ps-3">
                                        <?php
                                $table_name = "covoiturages";
                                $reponse = $su->getNames($table_name);
                                if($reponse->num_rows > 0)
                                { $rowcount = 0;
                                    while($row = $reponse->fetch_assoc()){
                                        $rowcount++;
                                    }
                                 }
                                ?>
                                        <h6><?=$rowcount;?></h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Revenue Card -->

                    <!-- Customers Card -->
                    <div class="col-xxl-4 col-xl-12">

                        <div class="card info-card customers-card">

                            <div class="card-body">
                                <h5 class="card-title">Utilisateurs</h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <?php
                                $table_name = "users";
                                $reponse = $su->getNames($table_name);
                                if($reponse->num_rows > 0)
                                { $rowcount = 0;
                                    while($row = $reponse->fetch_assoc()){
                                        $rowcount++;
                                    }
                                 }
                                ?>
                                        <h6><?=$rowcount;?></h6>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div><!-- End Customers Card -->

                </div>
            </div><!-- End Left side columns -->

        </div>
    </section>

</main><!-- End #main -->

<?php
include_once "inc/footer.php";
?>