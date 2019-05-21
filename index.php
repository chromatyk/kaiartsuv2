<?php
include_once 'include/header.php';
?>
<body>
  <?php
  include_once 'include/loader.php';
  ?>
  <div class="progress-container">
    <div class="progress">
      <div class="progress-bar">
        <div class="progress-shadow"></div>
      </div>
    </div>
  </div>
  <!-- Page Home - Début -->
  <div id="fadeSite">
    <!-- Menu Principal - Début -->
    <header id="header-main">
      <a href="#" class="brand"><img src="assets/images/logo/Kaiartsuv2.png"/></a>
      <a href="#" id="burger"> <span></span> <span></span> <span></span> </a>
      <nav id="nav-main">
        <ul>
          <li class="brandMobile"><img src="assets/images/logo/logoAlone.png"/></li>
          <li><a class="firstLink" href="accueil.php">Accueil</a></li>
          <li><a href="agency.php">L'agence</a></li>
          <li><a href="webDev.php">Création web</a></li>
          <li><a href="graphisme.php">Studio Graphique</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav>
    </header>
    <main id="contenuPage">
      <!-- Menu Principal - Fin -->
      <section id="kaiartsu" class="sectionScroll panel home" data-section-name="Kaiartsu">
        <div class="container-fluid">
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
      <section id="whoAreWe" class="sectionScroll panel panel1" data-section-name="L'agence">              <!--?xml version="1.0" encoding="utf-8"?-->
        <?php
        include_once 'assets/svg/kaiartsuSVG.php';
        ?>
        <div class="container">
          <div class="row dispear">
            <div class="col-8 offset-1">
              <h2>
                L'agence web,<br /> <span class="h2Color">Kaiartsu.</span>
              </h2>
            </div>
          </div>
          <div class="row dispear">
            <div class="col-9 offset-2">
              <h3>
                - Création de site internet et support marketing -
              </h3>
            </div>
          </div>
          <div class="row dispear">
            <div class="col-10 offset-1">

              <p>
                Kaiartsu est une agence web spécialisée dans la création de site internet et le graphisme, nous sommes installés dans le campus économique Inovia à Noyon dans l'Oise.<br/>
                Nous fournissons des réponses à vos questions et créons des solutions flexibles qui transforment votre communication numérique en résultats concrets.<br/>
                En travaillant étroitement avec vous tous les jours à tous les niveaux, nous permettons à vos projets d'exister et d'évoluer.<br/>
                Que ce soit la création ou la refonte de votre site web, l'amélioration de la qualité web de votre site, la mise à niveau de vos réglementations ou encore la création de supports marketing, nous sommes à votre écoute.

              </p>
            </div>
          </div>
          <div class="row dispear">
            <div class="buttonMore">
              <a href="agency.php"><button class="raise">En savoir plus</button></a>
            </div>
          </div>
        </div>
      </section>
      <!-- Qui sommes nous - Fin -->
      <section id="webDev" class="sectionScroll panel panel2" data-section-name="Web">
        <?php
        include_once 'assets/svg/puceau.php';
        ?>
        <div class="container">
          <div class="row dispear">
            <div class="col-10 offset-1">
              <div class="wrapper">
                <h2 class="glitch">
                  Le développement web par <span class="h2ColorDev">Kaiartsu.</span>
                </h2>
              </div>
            </div>
          </div>
          <div class="row dispear">
            <div class="col-9 offset-2">
              <h3>
                - La création ou la refonte d'un site internet ? Vous avez un projet, nous avons une solution. -
              </h3>
            </div>
          </div>
          <div class="row dispear">
            <div class="col-10 offset-1">
              <p>
                Chez kaiartsu nous créons des sites web à votre image.<br/>
                Que ce soit un site vitrine ou un site d'e-commerce, nous vous accompagnons tout le long de la création, mais aussi dans l'évolution de votre projet.<br/>
                Nous vous garantissons un site web responsive, optimisé pour une visite confortable quelque soit le support.<br/>
                Nous sommes deux développeurs web certifiés "Opquast", vous assurant d'avoir un site répondant aux bienséances du web.
              </p>
            </div>
          </div>
          <div class="row dispear">
            <div class="buttonMore">
              <a href="webDev.php"><button class="raise">En savoir plus</button></a>
            </div>
          </div>
        </div>
      </section>
      <section id="webDesign" class="sectionScroll panel panel3" data-section-name="Graphisme">
        <?php
        include_once 'assets/svg/bgDesign.php';
        ?>
        <div class="container">
          <div class="row dispear">
            <div class="col-9 offset-1">
              <h2>
                Le graphisme par <span class="h2Color">Kaiartsu.</span>
              </h2>
            </div>
          </div>
          <div class="row dispear">
            <div class="col-9 offset-2">
              <h3>
                - Charte graphique ou support marketing ? Un design qui vous ressemble.  -
              </h3>
            </div>
          </div>
          <div class="row dispear">
            <div class="col-10 offset-1">
              <p>
                Chez Kaiartsu nous poussons la communication au-delà du web.<br/>
                Notre studio graphique posséde les compétences nécessaires pour vous aidez à améliorer votre visibilité.<br />
                Un logo, une charte graphique ou un support marketing nous vous conseillons et vous aidons à transmettre une image qui vous ressemble.
              </p>
            </div>
          </div>
          <div class="row dispear">
            <div class="buttonMore">
              <a href="graphisme.php"><button class="raise">En savoir plus</button></a>
            </div>
          </div>
        </section>
      </main>
    </div>
    <?php
    include(utf8_encode('include/footer.php'));
    ?>
    <script src="assets/js/main.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/js/bootstrap.js" type="text/javascript"></script>
    <script src="assets/js/onescroll.js" type="text/javascript"></script>
    <script src="assets/js/parallax.js" type="text/javascript"></script>
    <script src="assets/js/textRandom.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://unpkg.com/onscreen/dist/on-screen.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vivus/0.4.4/vivus.min.js" type="text/javascript"></script>
  </body>
  </html>
