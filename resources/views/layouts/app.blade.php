<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/footer.css">
    @yield('style')

    <title>@yield('title') | Miliboo</title>

    <link rel="apple-touch-icon" sizes="76x76" href="/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="/assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="/assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!--* FONT AWESOME -->
    <script src="https://kit.fontawesome.com/facfbfe3cd.js" crossorigin="anonymous"></script>


    <!-- TARTE AU CITRON / COOKIES -->
    <script src="https://tarteaucitron.io/load.js?domain=51.83.36.122&uuid=52040bfefd6f4b4ae2d650efb894732bf1defe77"></script>
</head>

<body>
    @include('partials.header')
    @yield('content')
    <div id="guide-utilisateur-ico">
        <i class="fa-solid fa-circle-question fa-3x"></i>
    </div>

    <div id="blackBG"></div>

    <section id="guide-utilisateur-page">
        <div id="guide-utilisateur-page__menu">
            @if (request()->routeIs('connexion') || request()->routeIs('home') || request()->routeIs('id_category') 
            || request()->routeIs('produit') || request()->routeIs('nouveautes') || request()->routeIs('promotion') || request()->routeIs('madeinfrance') 
            || request()->routeIs('protectiondesdonnees') || request()->routeIs('politiquecookies') || request()->routeIs('boutique_miliboo') 
            || request()->routeIs('compte') || request()->routeIs('likes') || request()->routeIS('likesnotconnected') || request()->routeIS('monpanier'))
            <div>
                <a href="#compte1" class="guide-utilisateur-page__menu__title">Informations relatives au compte</a>
                <a href="#creecompte1">- Créer mon compte</a>
                <a href="#finalisecompte1">- Finaliser mon compte</a>
                <a href="#connectecompte1">- Se connecter au compte</a>
                <a href="#modifinfocompte1">- Modifier mes informations personnelles</a>
                <a href="#modifmdpcompte1">- Modifier mon mot de passe</a>
                <a href="#decocompte1">- Se déconnecter</a>
            </div>
            @endif

            @if (request()->routeIs('connexion') || request()->routeIs('home') || request()->routeIs('protectiondesdonnees') || request()->routeIs('politiquecookies') || request()->routeIs('compte'))
            <div>
                <a href="#livraison1" class="guide-utilisateur-page__menu__title">Gestion des adresses de livraison</a>
                <a href="#ajoutlivraison1">- Ajouter une adresse de livraison</a>
                <a href="#modiflivraison1">- Modifier une adresse de livraison</a>
                <a href="#supplivraison1">- Supprimer une adresse de livraison </a>
            </div>
            @endif

            @if (request()->routeIs('connexion') || request()->routeIs('home') || request()->routeIs('id_category') 
            || request()->routeIs('promotion') || request()->routeIs('protectiondesdonnees') || request()->routeIs('politiquecookies')) 
            <div>
                <a href="#produit1" class="guide-utilisateur-page__menu__title">Navigation et accès aux produits</a>
                <a href="#navtextproduit1">- Rechercher textuellement un produit</a>
                <a href="#navcatproduit1">- Rechercher des produits par catégorie</a>
                <a href="#navparticulierproduit">- Rechercher des produits particuliers</a>
            </div>
            @endif

            @if (request()->routeIs('home') || request()->routeIs('produit') || request()->routeIs('protectiondesdonnees') || request()->routeIs('politiquecookies'))
            <div>
                <a href="#visualisation1" class="guide-utilisateur-page__menu__title">Visualisation du produit</a>
                <a href="#achatvisualisation1">- Acheter un produit</a>
                <a href="#favorivisualisation1">- Actions sur le produit</a>
                <a href="#consultvisualisation1">- Ajouter / consulter les avis du produit</a>
                <a href="#recommandevisualisation1">- Voir les produits recommandés</a>
                <a href="#dernieresconsultvisualisation1">- Retrouver les dernières consultations</a>
            </div>
            @endif

            @if (request()->routeIs('home') || request()->routeIs('id_category') || request()->routeIs('produit') || request()->routeIs('nouveautes') 
            || request()->routeIs('promotion') || request()->routeIs('madeinfrance') || request()->routeIs('protectiondesdonnees') || request()->routeIs('politiquecookies') || 
            request()->routeIs('likes') || request()->routeIS('likesnotconnected'))
            <div>
                <a href="#gestion1" class="guide-utilisateur-page__menu__title">Gestion des produits favoris</a>
                <a href="#ajoutgestion1">- Ajouter aux produits favoris</a>
                <a href="#consultgestion1">- Consulter mes produits favoris</a>
                <a href="#supprgestion1">- Retirer des produits favoris</a>
            </div>
            @endif

            @if (request()->routeIs('home') || request()->routeIs('protectiondesdonnees') || request()->routeIs('politiquecookies') || request()->routeIs('monpanier') 
            || request()->routeIs('produit'))
            <div>
                <a href="#commande1" class="guide-utilisateur-page__menu__title">Gestion des commandes</a>
                <a href="#passercommande1">- Passer une commande</a>
                <a href="#consultcommande1">- Consulter mes commandes</a>
            </div>
            @endif

        </div>
        <div id="guide-utilisateur-page__contenu">
            <div id="guide-utilisateur-titre2">
                <h2 class="guide-utilisateur-page__contenu__title">Guide utilisateur</h2>
            </div>
            @if (request()->routeIs('connexion') || request()->routeIs('home') || request()->routeIs('id_category') || request()->routeIs('produit') 
            || request()->routeIs('nouveautes') || request()->routeIs('promotion') || request()->routeIs('madeinfrance') || request()->routeIs('protectiondesdonnees') 
            || request()->routeIs('politiquecookies') || request()->routeIs('compte') || request()->routeIs('likes') || request()->routeIS('likesnotconnected')
            || request()->routeIs('boutique_miliboo'))
            <section id="info-compte">
                <h2 id="compte1">Informations relatives au compte</h2>
                <h3 id="creecompte1">- Créer mon compte</h3>
                <p>1) Accéder à la fenètre « Mon compte » en cliquant sur le bouton ci-dessous, en haut à droite du site Web :</p>
                <img class="img-guideU" src="/assets/imageGuideU/createaccount.png"></img>
                <p>2) Renseignez votre adresse mail et confirmez en cliquant sur le bouton « Créer mon compte »</p>

                <h3 id="finalisecompte1">- Finaliser mon compte</h3>
                <p>1) Renseignez les champs du formulaire de création de compte</p>
                <p class="italique-champsnonobligatoires">Ne sont pas obligatoires :</p>
                <p>- Les cases à cocher concernant les newsletters</p>
                <p>- Le téléphone (le portable est obligatoire cependant)</p>
                <p>2) Validez votre inscription</p>
                <p>Vous allez apercevoir un popup vous renseignant la validité de votre compte, et vous indiquant les éléments manquants s’il y en a.</p>


                <p class="italique-champsnonobligatoires">Vous rencontrez des difficultés ?</p>

                <p class="options-aide">Je ne peux pas valider mon mot de passe :</p>
                <p class="options-aide">Le mot de passe doit contenir :</p>
                <p class="options-aide">- Au moins 12 caractères</p>
                <p class="options-aide">- Au moins une minuscule et une majuscule</p>
                <p class="options-aide">- Au moins un chiffre</p>
                <p class="options-aide">- Au moins un caractère spécial</p>

                <p>Je ne peux pas choisir mon adresse</p>
                <p>a) Saisissez votre adresse complète dans le champ suivant :</p>
                <img class="img-guideU" src="/assets/imageGuideU/address.png" alt="Illustration Adresse"></img>
                <p>b) Vous devriez voir une liste d’adresse parmi lesquelles vous pouvez sélectionner la vôtre</p>
                <img class="img-guideU" src="/assets/imageGuideU/Select_Address.png" alt="Illustration Choisir Adresse">
                <p>Si ce n’est pas le cas, cliquez sur « Rechercher votre adresse », si ça ne marche toujours pas, le serveur des adresses est indisponible, réessayez dans quelques minutes.</p>

                <h3 id="connectecompte1">- Se connecter au compte</h3>
                <p>1) Si vous n’y êtes pas déjà, accedez à la fenêtre « Mon compte » en cliquant sur le bouton ci-dessous, en haut à droite du site Web : </p>
                <img class="img-guideU" src="/assets/imageGuideU/createaccount.png" alt="Illustration Partie Connexion"></img>
                <p>2) Renseignez l’adresse mail à laquelle votre compte est lié, ainsi que votre mot de passe.</p>
                <p>3) Renseignez le code que vous avez dû recevoir sur votre smartphone, il permet une connexion plus sécurisée.</p>
                <p class="italique-champsnonobligatoires">Vous n’avez pas reçu le code de confirmation ?</p>
                <p>- Vérifiez que votre smartphone n’est pas en mode avion.</p>
                <p>- Il est possible que le numéro de téléphone lié au compte soit erroné. Dans ce cas, contactez le support.</p>

                <h3 id="modifinfocompte1">- Modifier mes informations personnelles</h3>
                <p class="italique-champsnonobligatoires">Vous devez être connecté.</p>
                <p>1) Accédez à votre compte, en haut à droite du site Web :</p>
                <img class="img-guideU" src="/assets/imageGuideU/createaccount.png" alt="Illustration Partie Connexion"></img>
                <p>2) En bas à gauche, cliquez sur « modifier mes informations personnelles ».</p>
                <p>3) Dans la rubrique du haut, cliquez sur « Modifier ».</p>
                <p>4) Vous pouvez modifier dans cette page vos informations personnelles.</p>
                <img class="img-guideU" src="/assets/imageGuideU/sectionModifier.png" alt="Illustration section Modifier"></img>

                <h3 id="modifmdpcompte1">- Modifier mon mot de passe</h3>
                <p>1) Accedez à la fenêtre « Mon compte » en cliquant sur le bouton ci-dessous, en haut à droite du site Web : </p>
                <img class="img-guideU" src="/assets/imageGuideU/createaccount.png" alt="Illustration Partie Connexion"></img>
                <p>2) A gauche, dans la rubrique « Mes informations personnelles », cliquez sur « Changer mon mot de passe ».</p>
                <p>3) Renseignez votre ancien et votre nouveau mot de passe, puis confirmez.</p>
                <p class="italique-champsnonobligatoires">Vous rencontrez des difficultés ?</p>
                <p class="options-aide">Je ne peux pas confirmer mon nouveau mot de passe :</p>
                <p class="options-aide">Le mot de passe doit contenir :</p>
                <p class="options-aide">- Au moins 12 caractères</p>
                <p class="options-aide">- Au moins une minuscule et une majuscule</p>
                <p class="options-aide">- Au moins un chiffre</p>
                <p class="options-aide">- Au moins un caractère spécial</p>

                <h3 id="decocompte1">- Se déconnecter</h3>
                <p>1) Accedez à la fenêtre « Mon compte » en cliquant sur le bouton ci-dessous, en haut à droite du site Web : </p>
                <img class="img-guideU" src="/assets/imageGuideU/createaccount.png" alt="Illustration Partie Connexion"></img>
                <p>2) Cliquez sur « se déconnecter » en bas à gauche.</p>
            </section>
            @endif

            @if (request()->routeIs('connexion') || request()->routeIs('home') || request()->routeIs('protectiondesdonnees') || request()->routeIs('politiquecookies') 
            || request()->routeIs('compte'))
            <section id="gestion-livraison">
                <h2 id="livraison1">Gestion des adresses de livraison</h2>
                <h3 id="ajoutlivraison1">- Ajouter une adresse de livraison</h3>
                <p>1) Accedez à la fenêtre « Mon compte » en cliquant sur le bouton ci-dessous, en haut à droite du site Web : </p>
                <img class="img-guideU" src="/assets/imageGuideU/createaccount.png" alt="Illustration Partie Connexion"></img>
                <p>2) En bas à gauche, cliquez sur « modifier mes informations personnelles ».</p>
                <p>3) Dans la rubrique « ADRESSE DE LIVRAISONS », cliquez sur « Ajouter une adresse ».</p>
                <p>4) Compétez et mettez à jour les informations.</p>

                <h3 id="modiflivraison1">- Modifier une adresse de livraison</h3>
                <p>1) Accedez à la fenêtre « Mon compte » en cliquant sur le bouton ci-dessous, en haut à droite du site Web : </p>
                <img class="img-guideU" src="/assets/imageGuideU/createaccount.png" alt="Illustration Partie Connexion"></img>
                <p>2) En bas à gauche, cliquez sur « modifier mes informations personnelles ».</p>
                <p>3) Dans la rubrique « ADRESSE DE LIVRAISONS », cliquez sur « Modifier ».</p>
                <p>4) Compétez et mettez à jour les informations.</p>

                <h3 id="supplivraison1">- Supprimer une adresse de livraison</h3>
                <p>1) Accedez à la fenêtre « Mon compte » en cliquant sur le bouton ci-dessous, en haut à droite du site Web : </p>
                <img class="img-guideU" src="/assets/imageGuideU/createaccount.png" alt="Illustration Partie Connexion"></img>
                <p>2) En bas à gauche, cliquez sur « modifier mes informations personnelles ».</p>
                <p>3) Dans la rubrique « ADRESSE DE LIVRAISONS », cliquez sur « Supprimer ».</p>

            </section>
            @endif

            @if (request()->routeIs('connexion') || request()->routeIs('home') || request()->routeIs('id_category') 
            || request()->routeIs('produit') || request()->routeIs('nouveautes') || request()->routeIs('promotion') || request()->routeIs('madeinfrance') 
            || request()->routeIs('protectiondesdonnees') || request()->routeIs('politiquecookies'))
            <section id="nav-produits">
                <h2 id="produit1">Navigation et accès aux produits</h2>
                <h3 id="navtextproduit1">- Rechercher textuellement un produit</h3>
                <p>Vous pouvez rechercher textuellement des produits en entrant leur nom dans la barre de recherche.</p>
                <p>Exemple: « Canapé ».</p>
                <img class="img-guideU" src="/assets/imageGuideU/rechercheproduit.png" alt="Illustration recherche produit">

                <h3 id="navcatproduit1">- Rechercher des produits par catégorie</h3>
                <p>Vous pouvez rechercher les produits correspondant à une certaine catégorie en accédant au sous-menu des catégories.</p>
                <p>Exemple: Catégorie « Canapé & Fauteuil >> Canapé design »</p>
                <img class="img-guideU" src="/assets/imageGuideU/rechercheproduitparcatego.png" alt="Illustration recherche produit par catégorie">

                <h3 id="navparticulierproduit">- Rechercher des produits particuliers (nouveaux produits / produits en promotion / produit fabriqués en France)</h3>
                <p>Les produits particuliers (Nouveautés, promotions, fabriqués en France) sont consultables dans l’en tête.</p>
                <img class="img-guideU" src="/assets/imageGuideU/Entete.png" alt="Illustration de l'entête">
            </section>
            @endif

            @if (request()->routeIs('home') || request()->routeIs('produit') || request()->routeIs('protectiondesdonnees') || request()->routeIs('politiquecookies'))
            <section id="visu-produits">
                <h2 id="visualisation1">Visualisation du produit</h2>
                <h3 id="achatvisualisation1">- Acheter un produit</h3>
                <p class="italique-champsnonobligatoires">La page produit se présente de cette façon :</p>
                <img class="img-guideU" src="/assets/imageGuideU/ProduitDispo.png" alt="Illustration disposition produit"></img>

                <h3 id="favorivisualisation1">- Actions sur le produit</h3>
                <p>Gérer le produit :</p>
                <img class="img-guideU" src="/assets/imageGuideU/gererProduit.png" alt="Illustration gérer produit">

                <h3 id="consultvisualisation1">- Ajouter / consulter les avis du produit</h3>
                <p>Pour ajouter un avis, vous devez être connecté et avoir commandé le produit spécifique.</p>
                <p>Une fois connecté et le produit commandé, vous devez saisir le titre le détail, la note de l’avis, et facultativement joindre une image pour illustrer votre avis.</p>
                <img class="img-guideU" src="/assets/imageGuideU/AjtProduit.png" alt="illustration ajouter avis">
                <p>Pour publier l'avis, appuyez sur le bouton « Publier ».</p>

                <h3 id="recommandevisualisation1">- Voir les produits recommandés</h3>
                <p>Une section est disponnible sous les avis du produit. Celle-ci vous présente des produits liés à celui que vous consultez actuellement.</p>

                <h3 id="dernieresconsultvisualisation1">- Retrouver les dernières consultations</h3>
                <p>Une section est disponible sous les avis et les produits recommandés. Celle-ci vous montre au maximum les 4 derniers produits que vous avez consulté.</p>
            </section>
            @endif

            @if (request()->routeIs('home') || request()->routeIs('id_category') || request()->routeIs('produit') || request()->routeIs('nouveautes') 
            || request()->routeIs('promotion') || request()->routeIs('madeinfrance') || request()->routeIs('protectiondesdonnees') || request()->routeIs('politiquecookies') || request()->routeIs('likes')) || request()->routeIS('likesnotconnected'))
            <section id="gestion-fav">
                <h2 id="gestion1">Gestion des produits favoris</h2>
                <h3 id="ajoutgestion1">- Ajouter aux produits favoris</h3>
                <p>1) Accédez à la page d’un produit en cliquant sur le produit que vous désirez.</p>
                <p>2) Cliquez sur le cœur rouge dans le bandeau récapitulatif du produit pour l’ajouter aux produits favoris.</p>
                <p>Présentation de la page produit : ajouter aux favoris.</p>
                <img class="img-guideU" src="/assets/imageGuideU/AjtAuxFav.png" alt="Illustration ajouter produit aux fav"></img>

                <h3 id="consultgestion1">- Consulter mes produits favoris</h3>
                <p>Vous pouvez consulter vos produits favoris dans l’onglet « Mes favoris » en haut à droite.</p>

                <h3 id="supprgestion1">- Retirer des produits favoris</h3>
                <p>1) Accédez à la page du produit favori en cliquant sur ce dernier, si vous ne le trouvez pas, assurez-vous d’être dans la rubrique « Mes favoris ».</p>
                <p>2) Cliquez sur le cœur rouge dans le bandeau récapitulatif du produit pour le retirer des produits favoris.</p>
            </section>
            @endif

            @if (request()->routeIs('home') || request()->routeIs('protectiondesdonnees') || request()->routeIs('politiquecookies') || request()->routeIs('monpanier') 
            || request()->routeIs('produit'))
            <section id="gestion-commandes">
                <h2 id="commande1">Gestion des commandes</h2>
                <h3 id="passercommande1">- Passer une commande</h3>
                <p>1) Après avoir choisi des produits à acheter via le bouton « j’achète », accédez à votre commande en cliquant sur le panier en haut à droite :</p>
                <img class="img-guideU" src="/assets/imageGuideU/partiePanier.png" alt="Illustration acces panier"></img>
                <p>Vous pouvez modifier la quantité et/ou supprimer les articles de votre commande.</p>
                <img class="img-guideU" src="/assets/imageGuideU/articlesPanier.png" alt="Illustration panier"></img>
                <p>2) Cochez l’adresse à laquelle vous souhaitez être livré.</p>
                <img class="img-guideU" src="MilibooS301/public/assets/imageGuideU/choisirAdresseLivraison.png" alt="Illustration choix adresse livraison">
                <p class="italique-champsnonobligatoires">Vous rencontrez des difficultés ?</p>
                <p class="options-aide">- Je n’ai pas d’adresse de livraisons.</p>
                <p class="options-aide">- Je souhaite être livré à une autre adresse. Accédez à votre espace personnel pour ajouter une adresse de livraison.<a>Comment faire?</a></p>
                <p class="options-aide">- L’adresse est incorrecte. Accédez à votre espace personnel pour modifier une adresse de livraison.<a>Comment faire?</a></p>
                <p>3) Insérez vos informations bancaires et validez.</p>
                <img class="img-guideU" src="/assets/imageGuideU/entrerCoordBanq.png" alt="Illustration page coordonnées banquaires"></img>
                <p>Ceci fait, vous serez redirigés vers le récapitulatif de votre commande.</p>

                <h3 id="consultcommande1">- Consulter mes commandes</h3>
                <p>1) Accedez à la fenêtre « Mon compte » en cliquant sur le bouton ci-dessous, en haut à droite du site Web : </p>
                <img class="img-guideU" src="/assets/imageGuideU/createaccount.png" alt="Illustration Partie Connexion"></img>
                <p>2) Cliquez sur « Voir mes commandes » en haut à gauche.</p>
                <p class="options-aide">Vous retrouverez ici un historique de vos commandes. Vous pouvez ainsi consulter les informations de chaque commande.</p>
            </section>
            @endif

        </div>
    </section>
    @include('partials.footer')

    <script src="/js/header.js"></script>
    <script src="/js/guideUtilisateur.js"></script>
    @yield('script')
    <script>
        let bodys = document.querySelector('body');
        let helpButton = document.querySelector('#guide-utilisateur-ico');
        let helpPopup = document.querySelector('#guide-utilisateur-page');
        let blackBGOK = document.querySelector('#blackBG');

        helpButton.addEventListener("click", (event) => {
            helpPopup.classList.toggle("active");
            blackBGOK.classList.toggle("active");
            bodys.classList.toggle("noscroll");
        });

        helpPopup.addEventListener("mouseout", (event) => {
            mouseOut = true;
        });

        helpPopup.addEventListener("mouseover", (event) => {
            mouseOut = false;
        });

        document.addEventListener("click", (event) => {
            if (helpPopup.classList.contains('active') && mouseOut == true) {
                helpPopup.classList.remove("active");
                blackBGOK.classList.remove("active");
                bodys.classList.remove("noscroll");
                mouseOut = false;
            }
        });
    </script>
</body>

</html>