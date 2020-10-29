<?php
    include('templates/header.php'); 
?>
<body class='bg-accueil' >
    <header class='header'>
        <div class="absolute pad-head">
            <img src="images/logo-agence-insitu-blanc.svg" alt="logo-agence-insitu"class="logo">
        </div>
        <div class="rs absolute pad-head">
            <a href="#" class="ico_rs"><img src="images/ico_linkedin.svg" alt="Logo linkedin"></a>
            <a href="#"><img src="images/ico_tel.svg" alt="Logo téléphone"></a>
        </div>
        <div class="hamburger-menu pad-head">
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn btn-accueil  " for="menu__toggle">
              <span></span>
            </label>
        
            <ul class="menu__box menu_accueil">
                <li><a class="menu__item item_accueil" href="index.php">Home page</a></li>
                <li><a class="menu__item item_accueil" href="insitu.php">In Situ</a></li>
                <li><a class="menu__item item_accueil" href="methode-1.php">Notre méthode</a></li>
                <li><a class="menu__item item_accueil" href="contact.php">Contact</a></li>
                <li><a class="menu__item item_accueil" href="newsletter.php">Newsletter</a></li>
            </ul>
          </div>

    </header>
    <main class="background">
        <section class="accueil">

            <div class="container">
                <p class="content-txt" > Faire <span id="performer">performer</span> <br>votre 
                <br>multi points de vente</p> 
                <div class="barre-accueil"></div>

                <ul class='content-list'>
                    <li class="list-item">réseau d'indépendant</li>
                    <li class="list-item">réseau d'affiliés</li>
                    <li class="list-item">réseau de franchisés</li>
                    <li class="list-item">réseau de distributeurs</li>
                    <li class="list-item">enseigne</li> 
                </ul>
            </div>
            
        </section>
        <div class="absolute play">
            <p class="text-play openSans">Découvrez notre approche <span class="coconOT-Bold">in situ</span></p>
            <a href="#"><img src="images/ico_play.svg" alt="" class="icon_play"></a>
            <div class='trait_play'></div>
        </div>
    </main>
</body>

<?php
    include('templates/footer.php');