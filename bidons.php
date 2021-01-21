  <!-- Jennifer -->
    <!-- Form -->
    <label>Label</label>
    <input placeholder="Input" class="input"></input>
    <input placeholder="Input" class="input -filled"></input>
    <input placeholder="Input" class="input -incorrect"></input>
    <!--<input placeholder="Input" class="input -correct"></input>-->
    
    <!-- Links -->
    <a href="#" class="link">This is a link</a>

    <!-- Montrer que le h1 est important et différent. Le seul sur qui on fait une exeption -->
    <h1>Title H1</h1>
    <!-- Le reste des titres sont "normaux" -->
    <h2>Title H2</h2>
    <h3>Title H3</h3>
    <h3 class="-blue">Title H3</h3>
    <h3 class="-bold">Title H3</h3>
    <h4>Title H4</h4>
    
    <!-- Dropdown menu -->
    <select name="dropdown" class="dropdown">
        <option value="" class="dropdown__item">Dropdown menu</option>
        <option value="Option 1" class="dropdown__item">Option 1</option>
        <option value="Option 2" class="dropdown__item">Option 2</option>
        <option value="Option 3" class="dropdown__item">Option 3</option>
        <option value="Option 4" class="dropdown__item">Option 4</option>
        <option value="Option 5" class="dropdown__item">Option 5</option>
        <option value="Option 6" class="dropdown__item">Option 6</option>
    </select>

    <!-- Menus déroulants -->
    <div class="dropdownCustom">
        <div class="dropdownCustom__title">
            <h4>Menu déroulant</h4><i class="dropdownCustom__chevron fa fa-chevron-down"></i>
        </div>
        <div class="dropdownCustom__content col-10">
            <div class=""><i class="fa fa-arrow-right"></i><p>GPS intégré</p></div>
            <div class=""><i class="fa fa-arrow-right"></i><p>Bonsoir, je suis un texte un peu plus long hihi voilà</p></div>
            <div class=""><i class="fa fa-arrow-right"></i><p>Bonsoir, je suis un texte encore un peu plus long que celui d'avant car Jen a besoin de voir ce que cela donne</p></div>
            <div class=""><i class="fa fa-arrow-right"></i><p>GPS intégré</p></div>
            <div class=""><i class="fa fa-arrow-right"></i><p>GPS intégré</p></div>
            <div class=""><i class="fa fa-arrow-right"></i><p>GPS intégré</p></div>
            <div class=""><i class="fa fa-arrow-right"></i><p>GPS intégré</p></div>
        </div>
    </div>

    <div class="dropdownCustom -functionalities">
        <div class="dropdownCustom__title">
            <i class="fa fa-brain -icon"></i><h3 class="-upper -bold">Intelligent</h3><i class="dropdownCustom__chevron fa fa-chevron-down"></i>
        </div>
        <div class="dropdownCustom__content col-10">
            <div class=""><i class="fa fa-arrow-right"></i><p>GPS intégré</p></div>
            <div class=""><i class="fa fa-arrow-right"></i><p>Bonsoir, je suis un texte un peu plus long hihi voilà</p></div>
            <div class=""><i class="fa fa-arrow-right"></i><p>Bonsoir, je suis un texte encore un peu plus long que celui d'avant car Jen a besoin de voir ce que cela donne</p></div>
            <div class=""><i class="fa fa-arrow-right"></i><p>GPS intégré</p></div>
            <div class=""><i class="fa fa-arrow-right"></i><p>GPS intégré</p></div>
            <div class=""><i class="fa fa-arrow-right"></i><p>GPS intégré</p></div>
            <div class=""><i class="fa fa-arrow-right"></i><p>GPS intégré</p></div>
        </div>
    </div>

    <!-- Léon***************************************************** -->
    
    <!-- Buttons ###################### -->
    <!-- Primary -->
    <a href="" class="button -big">Big Primary a</a>
    <button class="button -big">Big Primary but</button>

    <!-- Secondary -->
    <button class="button -secondary -big">Big Secondary</button>

    <!-- Small -->
    <button class="button">Normal</button>

    <!-- Toggle -->
    <label class="switch">
        <input type="checkbox" class="switch__box">
        <span class="switch__slider"></span>
    </label>

    <!-- checkmark -->
    <label class="checkbox">
        <input type="checkbox" class="checkbox__box">
        <span class="checkbox__mark"></span>
    </label>

    <!-- return -->
    <a href="" class="return" style="margin-left: 5rem;">Retour</a>

    <footer class="footer col-10 centerHz">
        <p class="footer__copyright">Copyright © 2020 Fitbit Inc. All rights reserved.</p>
        <div class="footer__content">
            <a href="" class="footer__item">CGV</a>
            <a href="" class="footer__item">CGU</a>
            <a href="" class="footer__item">Mentions légales</a>
            <a href="" class="footer__item">Politique de confidentialité</a>
        </div>
    </footer>

    <!-- Navigation -->
    <nav class="navMobile nav">
        <a href=""><img src="images/fitbit-logo-min.png" alt="logo"></a>
        <div class="burger">
            <a href="" class="burger__cart"><img src="" alt="panier"></a>
            <div class="burger__toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>
   
    <nav class="mainNav nav -close">
        <div class="mainNav__container col-md-10 centerHz">
            <a href="" class="mainNav__logo"><img src="images/fitbit-logo.png" alt="Image"></a>
            <ul class="mainNav__list col-s-8 ">
                <li class="mainNav__link"><a href="">Fitbit Versa 3</a></li>
                <li class="mainNav__link"><a href="">à propos de fitbit</a></li>
                <li class="mainNav__link"><a href="">support</a></li>
                <li class="mainNav__icon"><a href=""><img src="" alt="icone"></a></li>
                <li class="mainNav__icon"><a href=""><img src="" alt="icone"></a></li>
                <li class="mainNav__icon"><a href=""><img src="" alt="icone"></a></li>
                <li class="mainNav__account"><a href="" class="button">Mon Compte</a></li>
                <li class="mainNav__account"><a href="" class="button -secondary">Déconnexion</a></li>
            </ul>
        </div>
    </nav>

    <!-- Animation Scroll -->
   <section class="avantages col-10 centerHz">
        <h2>Les avantages de la Versa 3</h2>
        <div id="trigger1"></div>
        <div id="trigger2"></div>
        <div id="trigger3"></div>
        <div id="trigger4"></div>
        <div id="pin1" class="avantages__content centerHz">

            <div class="avantages__content-left col-4">
                <div id="txt1">
                    <h2>Bracelet</h2>
                    <p>Un bracelet coloré et confortable</p>
                </div>
                <div id="txt3">
                    <h2>Charge rapide</h2>
                    <p>24h d'autonomie en 20 minutes</p>
                </div>
            </div>
            
            <div class="col-4">
                <img src="images/musique.png" class="avantages__img" alt="Une image">
            </div>

            <div class="avantages__content-right col-4">
                <div id="txt2">
                    <h2>Fonctionnalité 3</h2>
                    <p>Du texte bidon pour remplir</p>
                </div>
                <div id="txt4">
                    <h2>Fonction 4</h2>
                    <p>Du texte bidon pour remplir</p>
                </div>
            </div>

        </div>
    </section>


    <!-- Éléments de rassurance -->

    <section class="reinssurance col-12 col-lg-10 col-xl-8 centerHz">
        <div class="reinssurance__card">
            <div class="reinssurance__content">
                <h3>Défis du jour</h3>
                <p>Aujourd’hui, votre défi sera 
                    de courir 1km.
                </p>
                <div class="reinssurance__buttons">
                    <a class="button -secondary">Découvrir</a>
                </div>
            </div>
            <img src="images/montre.png" alt="photo">
        </div>

        <div class="reinssurance__card">
            <div class="reinssurance__content">
                <h3>On s’occupe de vous</h3>
                <p>Notre équipe est à votre disposition pour toutes questions.
                </p>
                <div class="reinssurance__buttons">
                    <a class="button">Acheter</a>
                    <a class="button -secondary">En savoir +</a>
                </div>
            </div>
            <img src="images/equipe.png" alt="photo">
        </div>

        <div class="reinssurance__card">
            <div class="reinssurance__content">
                <h3>Paiement sécurisé</h3>
                <p>Notre site vous propose de payer avec des dispositifs sécurisés.
                </p>
                <div class="reinssurance__buttons">
                    <a class="button">Acheter</a>
                    <a class="button -secondary">En savoir +</a>
                </div>
            </div>
            <img src="images/paiement.png" alt="photo">
        </div>
    </section>


 <!-- Fonctionnalités -->

 <div class="fonctionnalites col-md-12">
    <h2 class="">LES FONCTIONNALITÉS QUI PEUVENT</br>VOUS INTÉRESSER</h2>
    <div class="fonctionnalites__container col-10   centerHz">
        <div class="fonctionnalites__image col-6 col-md-3">
            <img src="images/sportive.png" alt="photo">
            <p>Votre meilleur allié sport !</p>
        </div>
        <div class="fonctionnalites__image col-6 col-md-3">
            <img src="images/stresse.png" alt="photo">
            <p>À l’affût des battements 
                de votre cœur.</p>
        </div>
        <div class="fonctionnalites__image col-6 col-md-3">
            <img src="images/musique.png" alt="photo">
            <p>La musique que vous aimez, 
                quand vous voulez.</p>
        </div>
        <div class="fonctionnalites__image col-6 col-md-3">
            <img src="images/dodo.png" alt="photo">
            <p>Gardez un œil sur votre sommeil.</p>
        </div>
    </div>
</div>

    <!-- Newsletter -->
    <div class="newsletter col-lg-6 centerHz">
        <div class="newsletter__content col-lg-8">
            <h3 class="newsletter__title -blue">Newsletter</h3>
            <p class="newsletter__text -big">Soyez au courant des </br> dernières mises à jour !</p>
            <p class="newsletter__text col-lg-10 col-8 centerHz">Restez informés des actualités de votre marque préférée.</p>
        </div>
        
        <form action="" class="newsletter__form">
            <label class="newsletter__label">Mail</label>
            <div class="newsletter__fields">
                <input placeholder="johndoe@gmail.com" class="input"></input>
                <button class="button -big">S'inscrire</button>
            </div> 
        </form> 
    </div>

    <!-- Block Texte Image -->
    <section class="text-photo col-12 col-lg-10 centerHz">
        <div class="text-photo__content">
            <h2 class="">VOUS MOTIVER TOUT EN ÉTANT ACCOMPAGNÉ</h2>
            <p>Découvrez la Fitbit Versa 3. Ce coach nouvelle génération vous suivra dans tous vos déplacements grâce a son GPS afin de vous garantir un meilleur suivi.</p>        
        </div>
        <div class="text-photo__img">
            <img src="images/montre.png" alt="Photo ici">
        </div>
    </section>

    <!-- Personnalisation Desktop -->
    <section class="customisation">
        <form class="bg-triangle">
            <img src="images/customisation.png" alt="" class="customisation__image">

            <ul id="watch-size" class="customisation__details customisation__size">
                <li class="customisation__btn -size -num1">40 mm</li>
                <li class="customisation__btn -size -num2">44 mm</li>
            </ul>

            <ul id="strap-color" class="customisation__details customisation__bands -colors">
                <li class="customisation__btn -strap"><span class="-num1 "></span></button>
                <li class="customisation__btn -strap"><span class="-num2 "></span></button>
                <li class="customisation__btn -strap"><span class="-num3 "></span></button>
            </ul>

            <ul id="body-color" class="customisation__details customisation__bodies -colors">
                <li class="customisation__btn -body"><span class="-num1 "></span></li>
                <li class="customisation__btn -body"><span class="-num2 "></span></li>
                <li class="customisation__btn -body"><span class="-num3 "></span></li>
            </ul>

            <div id="custom_elements" class="customisation__elements">
                <span data-id="watch-size" class="customisation__btn button -alt -big">Taille</span>
                <span data-id="strap-color" class="customisation__btn button -alt -big">Cadran</span>
                <span data-id="body-color" class="customisation__btn button -alt -big">Bracelet</span>
            </div>
        </form>
    </section>

    <!-- Changer url dans une variable en fonction de la combinaison de montre -->
   <iframe id="24bf5a4a-341e-4045-865b-609913f09b21" src="https://www.vectary.com/viewer/v1/?model=24bf5a4a-341e-4045-865b-609913f09b21&env=studio3" frameborder="0" width="100%" height="480"></iframe>
    <iframe id="44ddb358-2b85-4423-91ac-41a5cd38da31" src="https://www.vectary.com/viewer/v1/?model=44ddb358-2b85-4423-91ac-41a5cd38da31&env=studio3" frameborder="0" width="100%" height="480"></iframe>
