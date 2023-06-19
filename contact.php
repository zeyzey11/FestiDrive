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
                                class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i
                            class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-3 bread">Contactez-nous</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-4">
                <div class="row mb-5">
                    <div class="col-md-12">
                        <div class="border w-100 p-4 rounded mb-2 d-flex">
                            <div class="icon mr-3">
                                <span class="icon-map-o"></span>
                            </div>
                            <p><span>Address:</span> Campus de Beaulieu 263 avenue Général Leclerc CS 74205 35042
                                Rennes, FRANCE</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="border w-100 p-4 rounded mb-2 d-flex">
                            <div class="icon mr-3">
                                <span class="icon-mobile-phone"></span>
                            </div>
                            <p><span>Phone:</span> <a href="tel://1234567920">+33 02 23 23 35 35</a></p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="border w-100 p-4 rounded mb-2 d-flex">
                            <div class="icon mr-3">
                                <span class="icon-envelope-o"></span>
                            </div>
                            <p><span>Email:</span> <a href="mailto:info@yoursite.com">igriae@univ-rennes1.fr</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 block-9 mb-md-5">
                <form action="#" class="bg-light p-5 contact-form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Entrez votre nom">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Entrer votre email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Objet">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="7" class="form-control"
                            placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Envoyer" class="btn btn-primary py-3 px-5">
                    </div>
                </form>

            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div id="map" class="">

                    <!-- <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3540.1417857252163!2d153.00466028034302!3d-27.46484491527137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b9150abedfe920b%3A0xf02a35bd721b500!2sSuncorp%20Stadium!5e0!3m2!1sfr!2sfr!4v1687108194872!5m2!1sfr!2sfr" width="400" height="400" style="border:0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
					</iframe>
				</p> -->

                </div>
            </div>
        </div>
    </div>
</section>
<script>
function initMap() {
    var myLatLng = {
        lat: 48.8566,
        lng: 2.3522
    };
    var mapOptions = {
        center: myLatLng,
        zoom: 12
    };
    var map = new google.maps.Map(document.getElementById('map'), mapOptions);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=VOTRE_CLE_API&callback=initMap" async defer></script>

</script>
<?php
include_once "inc/footer.php";
?>