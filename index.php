    <?php
    include_once 'include/header.php';
    ?>
    <body>
        <?php
        include_once 'include/loader.php';
        ?>
        <!-- Page Home - D�but -->
        <div id="fadeSite">
            <!-- Menu Principal - D�but -->
            <header id="header-main">
                <a href="#" class="brand"><img src="assets/images/logo/Kaiartsuv2.png"/></a>
                <a href="#" id="burger"> <span></span> <span></span> <span></span> </a>
                <nav id="nav-main">
                    <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="agency.php">L'agence</a></li>
                        <li><a href="webDev.php">D�veloppement web</a></li>
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
                        <div class="circleBlack sunset"></div>
                      <div class="circleBlack coolice"></div>
                      <div class="circleBlack timber"></div>
                      <div class="circleBlack pig"></div>
                      <div class="circleBlack friday"></div>
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
                <!-- Qui sommes nous - D�but -->
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
                                    - Cr�ation de site internet et support marketing -
                                </h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-10 offset-2">
                                <p> 
                                    Kaiartsu est une agence web sp�cialis�e dans la cr�ation de site internet et le graphisme, nous sommes install�s dans le campus �conomique Inovia � Noyon dans l'Oise.<br/>
                                    Nous fournissons des r�ponses � vos questions et cr�ons des solutions flexibles qui transforment votre communication num�rique en r�sultats concrets.<br/>
                                    En travaillant �troitement avec vous tous les jours � tous les niveaux, nous permettons � vos projets d'exist�s et d'�volu�s.<br/> 
                                    Que ce soit la cr�ation ou la refonte de votre site web, l'am�lioration de la qualit� web de votre site, la mise � niveau de vos r�glementations ou encore la cr�ation de supports marketing, nous sommes � votre �coute.
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
                                    Le d�veloppement web par <span class="h2ColorDev">Kaiartsu.</span>
                                </h2>
                            </div>
                        </div>
                        <div class="row dispear">
                            <div class="col-9 offset-3">
                                <h3>
                                    - La cr�ation ou la refonte d'un site internet ? Vous avez un projet on a une solution -
                                </h3>
                            </div>
                        </div>
                        <div class="row dispear">
                            <div class="col-10 offset-2">
                                <p>
                                    Chez kaiartsu nous cr�ons des sites web � votre image.<br/>
                                    Que ce soit un site vitrine ou un site d'e-commerce nous vous accompagnons tous le long de la cr�ation, mais aussi dans l'�volution de votre projet.<br/>
                                    Nous vous garantissons un site web responsive, optimis� pour une visite confortable quel que soit le support.<br/>
                                    Nous sommes deux d�veloppeurs web certifi�s "Opquast", vous assurant d'avoir un site r�pondant aux bien sc�ances du web.
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
                                    Chez Kaiartsu nous poussons la communication au-del� du web.<br/>
                                    Notre studio graphique poss�de les comp�tences necessaire pour vous aidez � am�liorer votre visibilit�.<br />
                                    Un logo, une charte graphique ou un support marketing nous vous conseillons et vous aidons � transmettre une image qui vous ressemble.
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
