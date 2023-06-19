<?php
include_once "inc/header.php";
?>

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('assets/images/bg_3.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Accueil <i
                                class="ion-ios-arrow-forward"></i></a></span> <span>Mes réservations <i
                            class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-3 bread">Vos réservations</h1>
            </div>
        </div>
    </div>
</section>


<section class="covoiturage">
    <!-- COIVOITURAGE -->

    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Mes Co-Voiturages</h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="car.php" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Nouveau
                                Co-Voiturage </span></a>

                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th></th>
                        <th>Type du véhicule</th>
                        <th>Nom du festival</th>
                        <th>Date de réservation</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td>Mercedes </td>
                        <td>Festival 2</td>
                        <td>15/06/2023</td>
                        <td>
                            <a href="#deleteVoitModal" class="delete" data-toggle="modal"><i class="material-icons"
                                    data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>

                </tbody>
            </table>
            <div class="clearfix">
                <div class="hint-text">Affichage de <b>5</b> entrées sur <b>25</b></div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Précédent</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Suivant</a></li>
                </ul>
            </div>
        </div>
    </div>


</section>

<section class="festival">
    <!-- FESTIVAL -->

    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Mes Festivals</h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="festival.php" class="btn btn-success"><i class="material-icons">&#xE147;</i>
                            <span>Nouveau Festival </span></a>

                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th></th>
                        <th>Nom du festival</th>
                        <th>Lieu du festival</th>
                        <th>Date de réservation</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td>Festival 1</td>
                        <td>28 rue du Bourbonnais</td>
                        <td>15/06/2023</td>
                        <td>
                            <a href="#deleteFestivalModal" class="delete" data-toggle="modal"><i class="material-icons"
                                    data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>

                </tbody>
            </table>
            <div class="clearfix">
                <div class="hint-text">Affichage de <b>5</b> entrées sur <b>25</b></div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Précédent</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Suivant</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Delete Modal HTML -->
    <div id="deleteVoitModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Supprimer une co-voit</h4>
                        <button type="button" class="close" data-dismiss="modalVoit" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Voulez-vous vraiment supprimer ces enregistrements?</p>
                        <p class="text-warning"><small>Cette action ne peut pas être annulée.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-warning" data-dismiss="modalVoit" value="Annuler">
                        <input type="submit" class="btn btn-danger" value="Supprimer">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete Modal HTML -->
    <div id="deleteFestivalModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Supprimer une réservation Festival</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Voulez-vous vraiment supprimer ces enregistrements?</p>
                        <p class="text-warning"><small>Cette action ne peut pas être annulée.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-warning" data-dismiss="modal" value="Annuler">
                        <input type="submit" class="btn btn-danger" value="Supprimer">
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>

<?php
include_once "inc/footer.php";
?>