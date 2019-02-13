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
                <section id="kaiartsu" class="sectionScroll">
                    <div class="container-fluid">  
                        <div class="circle sunset"></div>
                        <div class="circle coolice"></div>
                        <div class="circle timber"></div>
                        <div class="circle pig"></div>
                        <div class="circle friday"></div>
                        <div class="row">
                            <div class="offset-3">
                                <h1>
                                    <span class="h2ColorTitle">Kaiartsu</span>
                                </h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="offset-3">

                                <div class="text"></div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Qui sommes nous - Début -->
                <section id="whoAreWe" class="sectionScroll" data-image-src="assets/images/fond.jpg">
                    <div class="container">

                        <div class="row">
                            <div class="col-8 offset-2">
                                <h2>
                                    L'agence web,<br /> <span class="h2Color">Kaiartsu.</span>
                                </h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-9 offset-3">
                                <h3>
                                    - Création de site internet et support marketing -
                                </h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-10 offset-2">
                                <p> 
                                    Kaiartsu est une agence web spécialisée dans la création de site internet et le graphisme, nous sommes installés dans le campus économique Inovia à Noyon dans l'Oise.<br/>
                                    Nous fournissons des réponses à vos questions et créons des solutions flexibles qui transforment votre communication numérique en résultats concrets.<br/>
                                    En travaillant étroitement avec vous tous les jours à tous les niveaux, nous permettons à vos projets d'existés et d'évolués.<br/> 
                                    Que ce soit la création ou la refonte de votre site web, l'amélioration de la qualité web de votre site, la mise à niveau de vos réglementations ou encore la création de supports marketing, nous sommes à votre écoute.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
        <script src="assets/js/main.js"></script>
        <script src="assets/lib/bootstrap/js/bootstrap.js" ></script>
        <script src="assets/js/onescroll.js" type="text/javascript"></script>
        <script src="assets/js/parallax.js"></script>
        <script src="assets/js/textRandom.js" type="text/javascript"></script>
    </body>
</html>
