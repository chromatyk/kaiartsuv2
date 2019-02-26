<?php
include_once 'include/header.php';
?>
<body>
    <?php
    include_once 'include/loader.php';
    ?>
    <!-- Page Home - Début -->
    <div id="fadeSite">
        <!-- Menu Principal - Début -->
        <header id="header-main">
            <a href="#" class="brand"><img src="assets/images/logo/Kaiartsuv2.png"/></a>
            <a href="#" id="burger"> <span></span> <span></span> <span></span> </a>

            <nav id="nav-main">
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="agency.php">L'agence</a></li>
                    <li><a href="webDev.php">Développement web</a></li>
                    <li><a href="graphisme.php">Design Visuel</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                <div id="nav-foot">

                    <div class="col"><h5>Pierre</h5>06.XX.XX.XX.XX</div>
                    <div class="col"><h5>Nicolas</h5> 07.XX.XX.XX.XX</div>

                </div>
            </nav>
        </header>
        <main id="contenuPage">
            <!-- Menu Principal - Fin -->
            <section class="sectionScroll panel home" data-section-name="home">
                <span data-tilt><div id="test"></div></span>
            </section>
            <!-- Qui sommes nous - Début -->
            <section id="whoAreWe" class="sectionScroll panel panel1" data-section-name="second">
                <div class="container">

                    <div class="row">
                        <div class="col-10 offset-2">
                            <h2 class="titleAgency">
                                Notre <span class="h2Color">Histoire</span> : </br>deux amis à votre service
                            </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10 offset-2">
                            <p>
                                Kaiartsu n’est pas une agence ordinaire, mais l’histoire de deux amis, passionnés par le Web, réunis autour de valeurs communes.
                                A la jonction entre un auto-entreprenariat réussi, nous sommes là pour prendre en main vos projets en mêlant professionnalisme et bonne humeur.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-9 offset-3">
                            <h3>
                                - Le web est une passion pour nous -
                            </h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10 offset-2">
                            <p>
                                L’humain au centre de nos préoccupations. Kaiartsu est une agence à l’écoute de ses clients, notre priorité est de nouer des relations positives et constructives dans le temps.
                                Après tout, Kaiartsu est née naturellement d’un constat simple : l’envie de mettre nos expériences au service de nos clients.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-9 offset-3">
                            <h3>
                                - Nos valeurs au travail ? L'humain et la transparence avant tout -
                            </h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10 offset-2">
                            <p>
                                Nos valeurs de confiance et de transparence régissent nos interactions. Les échanges ouverts, sincères et respectueux sont des vecteurs clé de succès chers à notre entreprise.
                                Notre travail est clair et limpide, vous resterez propriétaire de votre site, il n’y a pas de mauvaises surprises à la livraison de votre projet.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Qui sommes nous - Fin -->
        </main>
    </div>
    <script src="assets/js/main.js"></script>
    <script src="assets/lib/bootstrap/js/bootstrap.js" ></script>
    <script src="assets/js/onescroll.js" type="text/javascript"></script>
    <script src="assets/js/parallax.js"></script>
    <script src="assets/js/textRandom.js" type="text/javascript"></script>
    <script src="assets/js/tilt.js" type="text/javascript"></script>
    <script>
        $('.js-tilt').tilt({
    reset: false
})
    </script>
</body>
</html>
