<?php
    include('templates/header.php'); 
?>
<body class='bg-methode-5 bg-methode overflow' >
    <header class='header'>
        <div class="absolute pad-head">
            <a href="index.php">
                <img src="images/logo-agence-insitu-blanc.svg" alt="logo-agence-insitu"class="logo">
            </a>
        </div>
        <div class="rs absolute pad-head">
            <a href="#" class="ico_rs"><img src="images/ico_linkedin.svg" alt="Logo linkedin"></a>
            <a href="#"><img src="images/ico_tel.svg" alt="Logo téléphone"></a>
        </div>
        <div class="hamburger-menu pad-head">
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn btn-accueil" for="menu__toggle">
              <span></span>
            </label>
        
            <ul class="menu__box menu_methode-5">
                <li><a class="menu__item" href="index.php">Home page</a></li>
                <li><a class="menu__item" href="insitu.php">In Situ</a></li>
                <li><a class="menu__item" href="methode-1.php">Notre méthode</a></li>
                <li><a class="menu__item" href="contact.php">Contact</a></li>
                <li><a class="menu__item" href="newsletter.php">Newsletter</a></li>
            </ul>
          </div>

    </header>
    <main class="background ">
        <div class="circle-page absolute">
            <div id="circle-1" class="absolute">
                <a href="methode-1.php">
                    <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" witdh="15" height="15" >
                        <circle cx="50" cy="50" r="50" fill="white" stroke="#e2001a"/>
                    </svg>
                </a>
            </div>
            <div id="circle-2" class="absolute">
                <a href="methode-2.php">
                    <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" witdh="15" height="15" >
                        <circle cx="50" cy="50" r="50" fill="white" stroke="#e2001a"/>
                    </svg>
                </a>
            </div>
            <div id="circle-3" class="absolute">
                <a href="methode-3.php">
                    <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" witdh="15" height="15" >
                        <circle cx="50" cy="50" r="50" fill="white" stroke="#e2001a"/>
                    </svg>
                </a>
            </div >
            <div id="circle-4" class="absolute">
                <a href="methode-4.php">
                    <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" witdh="15" height="15" >
                        <circle cx="50" cy="50" r="50" fill="white" stroke="#e2001a"/>
                    </svg>
                </a>
            </div>
            <div id="circle-5" class="absolute">
                <a href="methode-5.php">
                    <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" witdh="15" height="15" >
                        <circle cx="50" cy="50" r="50" fill="#e2001a" stroke="#e2001a"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="methode-content relative">
            <div class="circle border-red">
                <div class="circle-text">
                    <div class="openSans methode-typo methode-typo-5 absolute">
                        <h1 class="methode-typo methode-typo-5">Team dédiée</h1>
                        <p class="text-methode-2">
                            <span class="coconOT-Bold methode-3-cocon">Préférons l'expertise</span><br><br>
                            Notre botte secrète ! Un duo qui vous chouchoute, 100% mobilisé pour vous, 
                            et une multitude de <span class='open-bold'>talents spécialisés</span> dans leur domaine d’expertise pour 
                            vous proposer le meilleur ! (créatif • vidéo • motion designer • UX • 
                            développeur • stratégie d’influence...). Un mode de travail super flexible 
                            et réactif qui fait appel au <span class='open-bold'>bon profil au bon moment</span>.
                        </p> 
                    </div> 
                </div>
            </div>
        </div>
        <div class="absolute play">
            <div class='trait_play-methode'></div>
            <a href="methode-1.php"><img src="images/ico_play.svg" alt="" class="icon_play"></a>
            
        </div>
    </main>
    </div>
</body>

<?php
    include('templates/footer.php');