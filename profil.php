<?php
include_once "inc/header.php";
?>

<section class="ftco-section">
    <div class="container light-style flex-grow-1 container-p-y">

        <h4 class="font-weight-bold py-3 mb-4">
            Modification du profil
        </h4>

        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list"
                            href="#account-general">Général</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-change-password">Changer le mot de passe</a>

                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="account-general">


                            <hr class="border-light m-0">

                            <div class="card-body">

                                <div class="form-group">
                                    <label class="form-label">Nom</label>
                                    <input type="text" class="form-control" value="Nelle">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Prénom</label>
                                    <input type="text" class="form-control mb-1" value="Maxwell">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">E-mail</label>
                                    <input type="text" class="form-control mb-1" value="nmaxwell@mail.com">
                                    <div class="alert alert-warning mt-3">
                                        Votre email n'est pas confirmé. Veuillez vérifier votre boîte de réception.<br>
                                        <a href="javascript:void(0)">Renvoyer la confirmation</a>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="tab-pane fade" id="account-change-password">
                            <div class="card-body pb-2">

                                <div class="form-group">
                                    <label class="form-label">Mot de passe Actuel</label>
                                    <input type="password" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Nouveau Mot de passe</label>
                                    <input type="password" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Confirmer Mot de passe</label>
                                    <input type="password" class="form-control">
                                </div>

                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>

        <div class="text-right mt-3">
            <button type="button" class="btn btn-primary">Sauvegarder</button>&nbsp;
            <button type="button" class="btn btn-danger">Annuler</button>
        </div>

    </div>
</section>

<?php
include_once "inc/footer.php";
?>