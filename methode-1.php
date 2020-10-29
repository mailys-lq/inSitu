<?php
    include('templates/header.php'); 
?>
<body class='bg-accueil bg-methode overflow' >
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
            <label class="menu__btn btn-accueil btn-methode-1" for="menu__toggle">
              <span></span>
            </label>
        
            <ul class="menu__box menu_methode-1">
                <li><a class="menu__item item_methode-1" href="index.php">Home page</a></li>
                <li><a class="menu__item item_methode-1" href="insitu.php">In Situ</a></li>
                <li><a class="menu__item item_methode-1" href="methode-1.php">Notre méthode</a></li>
                <li><a class="menu__item item_methode-1" href="contact.php">Contact</a></li>
                <li><a class="menu__item item_methode-1" href="newsletter.php">Newsletter</a></li>
            </ul>
          </div>

    </header>
    <main class="background ">
        <div class="circle-page absolute">
            <div id="circle-1" class="absolute">
                <a href="methode-1.php">
                    <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" witdh="15" height="15" >
                        <circle cx="50" cy="50" r="50" fill="white" stroke="white"/>
                    </svg>
                </a>
            </div>
            <div id="circle-2" class="absolute">
                <a href="methode-2.php">
                    <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" witdh="15" height="15" >
                        <circle cx="50" cy="50" r="50" fill="none" stroke="white"/>
                    </svg>
                </a>
            </div>
            <div id="circle-3" class="absolute">
                <a href="methode-3.php">
                    <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" witdh="15" height="15" >
                        <circle cx="50" cy="50" r="50" fill="none" stroke="white"/>
                    </svg>
                </a>
            </div >
            <div id="circle-4" class="absolute">
                <a href="methode-4.php">
                    <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" witdh="15" height="15" >
                        <circle cx="50" cy="50" r="50" fill="none" stroke="white"/>
                    </svg>
                </a>
            </div>
            <div id="circle-5" class="absolute">
                <a href="methode-5.php">
                    <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" witdh="15" height="15" >
                        <circle cx="50" cy="50" r="50" fill="none" stroke="white"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="methode-content methode-1 relative">
            <div class=" circle-text-1">
                <p class="openSans methode-typo methode-typo-1 absolute">
                    L'agence de communication <span class="coconOT-Bold methode-cocon">in situ</span><br>
                    Avec vous et votre réseau à chaque instant
                </p>
            </div>  
        </div>
    </main>
</body>

<?php
    include('templates/footer.php');