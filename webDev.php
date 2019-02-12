    <?php
    include_once 'include/header.php';
    ?>
    <body>
        <!-- Page Home - DÃ©but -->
        <div id="fadeSite">
            <!-- Menu Principal - DÃ©but -->
            <header id="header-main">
                <a href="#" class="brand"><img src="assets/images/logo/Kaiartsuv2.png"/></a>
                <a href="#" id="burger"> <span></span> <span></span> <span></span> </a>

                <nav id="nav-main">
                    <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="agency.php">L'agence</a></li>
                        <li><a href="webDev.php">DÃ©veloppement web</a></li>
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
                <!-- Qui sommes nous - DÃ©but -->
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
                                    - CrÃ©ation de site internet et support marketing -
                                </h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-10 offset-2">
                                <p> 
                                    Kaiartsu est une agence web spÃ©cialisÃ©e dans la crÃ©ation de site internet et le graphisme, nous sommes installÃ©s dans le campus Ã©conomique Inovia Ã  Noyon dans l'Oise.<br/>
                                    Nous fournissons des rÃ©ponses Ã  vos questions et crÃ©ons des solutions flexibles qui transforment votre communication numÃ©rique en rÃ©sultats concrets.<br/>
                                    En travaillant Ã©troitement avec vous tous les jours Ã  tous les niveaux, nous permettons Ã  vos projets d'existÃ©s et d'Ã©voluÃ©s.<br/> 
                                    Que ce soit la crÃ©ation ou la refonte de votre site web, l'amÃ©lioration de la qualitÃ© web de votre site, la mise Ã  niveau de vos rÃ©glementations ou encore la crÃ©ation de supports marketing, nous sommes Ã  votre Ã©coute.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Qui sommes nous - Fin -->
                <section id="webDev" class="sectionScroll">
                    <div class="container">
                        <div class="row dispear">
                            <div class="col-10 offset-2">
                                <h2>
                                    Le dÃ©veloppement web par <span class="h2ColorDev">Kaiartsu.</span>
                                </h2>
                            </div>
                        </div>
                        <div class="row dispear">
                            <div class="col-9 offset-3">
                                <h3>
                                    - La crÃ©ation ou la refonte d'un site internet ? Vous avez un projet on a une solution -
                                </h3>
                            </div>
                        </div>
                        <div class="row dispear">
                            <div class="col-10 offset-2">
                                <p>
                                    Chez kaiartsu nous crÃ©ons des sites web Ã  votre image.<br/>
                                    Que ce soit un site vitrine ou un site d'e-commerce nous vous accompagnons tous le long de la crÃ©ation, mais aussi dans l'Ã©volution de votre projet.<br/>
                                    Nous vous garantissons un site web responsive, optimisÃ© pour une visite confortable quel que soit le support.<br/>
                                    Nous sommes deux dÃ©veloppeurs web certifiÃ©s "Opquast", vous assurant d'avoir un site rÃ©pondant aux bien scÃ©ances du web.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="webDesign" class="sectionScroll">
                    <div class="container">
                        <div class="row dispear">
                            <div class="col-9 offset-2">
                                <h2>
                                    Le graphisme par <span class="h2Color">Kaiartsu.</span>
                                </h2>
                            </div>
                        </div>
                        <div class="row dispear">
                            <div class="col-9 offset-3">
                                <h3>
                                    - Charte graphique ou support marketing ? Un design qui vous ressemble  -
                                </h3>
                            </div>
                        </div>
                        <div class="row dispear">
                            <div class="col-10 offset-2">
                                <p>
                                    Chez Kaiartsu nous poussons la communication au-delÃ  du web.<br/>
                                    Notre studio graphique possÃ¨de les compÃ©tences necessaire pour vous aidez Ã  amÃ©liorer votre visibilitÃ©.<br />
                                    Un logo, une charte graphique ou un support marketing nous vous conseillons et vous aidons Ã  transmettre une image qui vous ressemble.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
        <script src="assets/js/transtion.js"></script>
        <script src="assets/js/navBar.js"></script>
        <script src="assets/lib/bootstrap/js/bootstrap.js" ></script>
        <script src="assets/js/onescroll.js" type="text/javascript"></script>
        <script src="assets/js/parallax.js"></script>
        <script src="assets/js/textRandom.js" type="text/javascript"></script>
    </body>
</html>
