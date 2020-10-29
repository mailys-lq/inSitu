<?php
    include('templates/header.php'); 
?>
<body class='bg-methode-2 bg-methode overflow' >
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
        
            <ul class="menu__box menu_methode-2">
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
                        <circle cx="50" cy="50" r="50" fill="white" stroke="#e2007a"/>
                    </svg>
                </a>
            </div>
            <div id="circle-2" class="absolute">
                <a href="methode-2.php">
                    <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" witdh="15" height="15" >
                        <circle cx="50" cy="50" r="50" fill="#e2007a" stroke="#e2007a"/>
                    </svg>
                </a>
            </div>
            <div id="circle-3" class="absolute">
                <a href="methode-3.php">
                    <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" witdh="15" height="15" >
                        <circle cx="50" cy="50" r="50" fill="white" stroke="#e2007a"/>
                    </svg>
                </a>
            </div >
            <div id="circle-4" class="absolute">
                <a href="methode-4.php">
                    <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" witdh="15" height="15" >
                        <circle cx="50" cy="50" r="50" fill="white" stroke="#e2007a"/>
                    </svg>
                </a>
            </div>
            <div id="circle-5" class="absolute">
                <a href="methode-5.php">
                    <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" witdh="15" height="15" >
                        <circle cx="50" cy="50" r="50" fill="white" stroke="#e2007a"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="methode-content relative">
            <div class="circle border-pink">
                <div class="circle-text flex-methode">
                    <div class="openSans methode-typo methode-typo-2 absolute ">
                        <h1 class="methode-typo methode-typo-2 ">Immersion</h1>
                        <p class="text-methode-2">
                            <span class="coconOT-Bold methode-2-cocon">Parlons vrai</span><br>
                            Dites-nous tout ! Votre histoire, la petite et la grande, les anecdotes 
                            et les tournants stratégiques. Échangeons <span class="open-bold">sans filtres</span>, en toute 
                            transparence, en toute confiance. Une base solide, pour construire <span class="open-bold">ensemble</span> 
                            la réponse aux <span class='open-bold'>ambitions de votre réseau</span>.
                        </p> 
                    </div> 
                </div>
            </div>
        </div>
    </main>
    </div>
</body>

<?php
    include('templates/footer.php');