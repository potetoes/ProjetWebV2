<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>First Site</title>

<style>

/* Définition des polices personnalisées */

@font-face

{

    font-family: 'BallparkWeiner';

    src: url('polices/ballpark.eot');

    src: url('polices/ballpark.eot?#iefix') format('embedded-opentype'),

         url('polices/ballpark.woff') format('woff'),

         url('polices/ballpark.ttf') format('truetype'),

         url('polices/ballpark.svg#BallparkWeiner') format('svg');

    font-weight: normal;

    font-style: normal;

}



@font-face

{

    font-family: 'Dayrom';

    src: url('polices/dayrom.eot');

    src: url('polices/dayrom.eot?#iefix') format('embedded-opentype'),

         url('polices/dayrom.woff') format('woff'),

         url('polices/dayrom.ttf') format('truetype'),

         url('polices/dayrom.svg#Dayrom') format('svg');

    font-weight: normal;

    font-style: normal;

}



/* Eléments principaux de la page */
body

{

    background: white;
    /*url('images/fond_jaune.png');*/
	

    font-family: 'Trebuchet MS', Arial, sans-serif;

    color: #181818;

}



#bloc_page

{

    width: 900px;

    margin: auto;

}



section h1, footer h1, nav a

{

    font-family: Dayrom, serif;

    font-weight: normal;

    text-transform: uppercase;

}



/* Header */



header

{

    background: url('images/separateur.png') repeat-x bottom;

}



#titre_principal

{

    display: inline-block;

}



header h1

{

    font-family: 'BallparkWeiner', serif;

    font-size: 2.5em;

    font-weight: normal;

}



#logo, header h1

{

    display: inline-block;

    margin-bottom: 0px;

}



header h2

{

    font-family: Dayrom, serif;

    font-size: 1.1em;

    margin-top: 0px;

    font-weight: normal;

}



/* Navigation */



nav

{

    display: inline-block;

    width: 740px;

    text-align: right;

}



nav ul

{

    list-style-type: none;

}



nav li

{

    display: inline-block;

    margin-right: 15px;

}



nav a

{

    font-size: 1.3em;

    color: #181818;

    padding-bottom: 3px;

    text-decoration: none;

}



nav a:hover

{

    color: #760001;

    border-bottom: 3px solid #760001;

}



/* Bannière */
#banniere_image
{

    margin-top: 15px;

    height: 200px;

    border-radius: 5px;

    background: url('images/bandeau1.jpg') no-repeat;

    position: relative;

    box-shadow: 0px 4px 4px #1c1a19;

    margin-bottom: 25px;

}


#banniere_description
{

    position: absolute;

    bottom: 0;

    border-radius: 0px 0px 5px 5px;

    width: 99.5%;

    height: 33px;

    padding-top: 15px;

    padding-left: 4px;

    background-color: rgb(24,24,24); /* Pour les anciens navigateurs */

    background-color: rgba(24,24,24,0.8);

    color: white;

    font-size: 0.8em;

    

}


.bouton_rouge
{

    display: inline-block;

    height: 25px;

    position: absolute;

    right: 5px;

    bottom: 5px;

    background: url('images/fond_degraderouge.png') repeat-x;

    border: 1px solid #760001;

    border-radius: 5px;

    font-size: 1.2em;

    text-align: center;

    padding: 3px 8px 0px 8px;

    color: white;

    text-decoration: none;

}



.bouton_rouge img
{
    border: 0;
}



/* Corps */
article, aside
{
    display: inline-block;

    vertical-align: top;

    text-align: justify;
}



article
{
    width: 625px;

    margin-right: 15px;
}


.ico_categorie
{
    vertical-align: middle;

    margin-right: 8px;
}



article p
{
    font-size: 0.8em;
}


aside
{
    position: relative;

    width: 235px;

    background-color: #706b64;

    box-shadow: 0px 2px 5px #1c1a19;

    border-radius: 5px;

    padding: 10px;

    color: white;

    font-size: 0.9em;
}



#fleche_bulle
{

    position: absolute;

    top: 100px;

    left: -12px;

}



#photo_zozor

{

    text-align: center;

}



#photo_zozor img

{

    border: 1px solid #181818;
  
     

}



aside img

{

    margin-right: 5px;

}



/* Footer */
footer
{
    background:  url('images/ico_top.png') no-repeat top center, url('images/separateur.png') repeat-x top, url('images/ombre.png') repeat-x top;

    padding-top: 25px;
}


footer p, footer ul
{
    font-size: 0.8em;
}


footer h1
{
    font-size: 1.1em;
}


#tweet, #mes_photos, #mes_amis
{
    display: inline-block;

    vertical-align: top;
}


#tweet
{
    width: 28%;
}


#mes_photos
{
    width: 35%;
}



#mes_amis

{

    width: 31%;

}



#mes_photos img

{

    border: 1px solid #181818;

    margin-right: 2px;

}



#mes_amis ul

{

    display: inline-block;

    vertical-align: top;

    margin-top: 0;

    width: 48%;

    list-style-image: url('images/ico_liensexterne.png');

    padding-left: 2px;

}



#mes_amis a

{

    text-decoration: none;

    color: #760001;

}





/* Correctifs pour les vieilles versions d'Internet Explorer */



/* Pour activer un positionnement type inline-block sur les vieilles versions d'IE */



.old_ie #titre_principal, .old_ie #logo, .old_ie header h1, .old_ie nav, .old_ie nav li, .old_ie .bouton_rouge, .old_ie article, .old_ie aside, .old_ie #tweet, .old_ie #mes_photos, .old_ie #mes_amis, .old_ie #mes_amis ul

{

    display: inline;

    zoom: 1;

}



/* Quelques ajustements pour les vieilles versions d'IE */



.old_ie section h1, .ie8 section h1

{

    font-size: 1.1em;

}



.old_ie footer div, .ie8 footer div

{

    margin-top: 30px;

    background: url('images/separateur.png') repeat-x top;

}



</style>


    </head>
    
    <!--[if IE 6 ]><body class="ie6 old_ie"><![endif]-->
    <!--[if IE 7 ]><body class="ie7 old_ie"><![endif]-->
    <!--[if IE 8 ]><body class="ie8"><![endif]-->
    <!--[if IE 9 ]><body class="ie9"><![endif]-->
    <!--[if !IE]><!--><body><!--<![endif]-->
        <div id="bloc_page">
            <header>
                <div id="titre_principal">
                    <img src="images/logo.jpg" alt="Logo" id="logo" />
                    <h1>Biblio'Web</h1>
                    <h2>La Gestion de votre Biblioteque au plus simple</h2>
                </div>
                
                <nav>
                    <ul>
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#">Gestion</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">CV</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </nav>
            </header>
            
            <div id="banniere_image">
                <div id="banniere_description">
                    La proposition bibliographique du jour
                    <a href="#" class="bouton_rouge">Voir l'article <img src="images/flecheblanchedroite.png" alt="" /></a>
                </div>
            </div>
            


            <section>
                <article>
                    <h1><img src="images/ico_epingle.png" alt="Catégorie voyage" class="ico_categorie" />Introduction au site</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec sagittis massa. Nulla facilisi. Cras id arcu lorem, et semper purus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis vel enim mi, in lobortis sem. Vestibulum luctus elit eu libero ultrices id fermentum sem sagittis. Nulla imperdiet mauris sed sapien dignissim id aliquam est aliquam. Maecenas non odio ipsum, a elementum nisi. Mauris non erat eu erat placerat convallis. Mauris in pretium urna. Cras laoreet molestie odio, consequat consequat velit commodo eu. Integer vitae lectus ac nunc posuere pellentesque non at eros. Suspendisse non lectus lorem.</p>
                    <p>Vivamus sed libero nec mauris pulvinar facilisis ut non sem. Quisque mollis ullamcorper diam vel faucibus. Vestibulum sollicitudin facilisis feugiat. Nulla euismod sodales hendrerit. Donec quis orci arcu. Vivamus fermentum magna a erat ullamcorper dignissim pretium nunc aliquam. Aenean pulvinar condimentum enim a dignissim. Vivamus sit amet lectus at ante adipiscing adipiscing eget vitae felis. In at fringilla est. Cras id velit ut magna rutrum commodo. Etiam ut scelerisque purus. Duis risus elit, venenatis vel rutrum in, imperdiet in quam. Sed vestibulum, libero ut bibendum consectetur, eros ipsum ultrices nisl, in rutrum diam augue non tortor. Fusce nec massa et risus dapibus aliquam vitae nec diam.</p>
                    <p>Phasellus ligula massa, congue ac vulputate non, dignissim at augue. Sed auctor fringilla quam quis porttitor. Praesent vitae dignissim magna. Pellentesque quis sem purus, vel elementum mi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas consectetur euismod urna. In hac habitasse platea dictumst. Quisque tincidunt porttitor vestibulum. Ut iaculis, lacus at molestie lacinia, ipsum mi adipiscing ligula, vel mollis sem risus eu lectus. Nunc elit quam, rutrum ut dignissim sit amet, egestas at sem.</p>
                </article>
                <aside>
                    <h1>À propos du site</h1>
                    <img src="images/bulle.png" alt="" id="fleche_bulle" />
                    <p id="photo_zozor"><img src="images/.jpg" alt="Photo de Zozor" /></p>
                    <p>Laisse-moi le temps de me présenter : je m'appelle Zozor, je suis né un 23 novembre 2005.</p>
                    <p>Bien maigre, n'est-ce pas ? C'est pourquoi, aujourd'hui, j'ai décidé d'écrire ma biographie (ou zBiographie, comme vous voulez !) afin que les zéros sachent qui je suis réellement.</p>
                    <p><img src="images/facebook.png" alt="Facebook" /><img src="images/twitter.png" alt="Twitter" /><img src="images/vimeo.png" alt="Vimeo" /><img src="images/flickr.png" alt="Flickr" /><img src="images/rss.png" alt="RSS" /></p>
                </aside>
            </section>
            
            <footer>
                <div id="tweet">
                    <h1>Mon dernier tweet</h1>
                    <p>Hii haaaaaan !</p>
                    <p>le 12 mai à 23h12</p>
                </div>
                <div id="mes_photos">
                    <h1>Mes photos</h1>
                    <p><img src="images/photo1.jpg" alt="Photographie" /><img src="images/photo2.jpg" alt="Photographie" /><img src="images/photo3.jpg" alt="Photographie" /><img src="images/photo4.jpg" alt="Photographie" /></p>
                </div>
                <div id="mes_amis">
                    <h1>Mes amis</h1>
                    <ul>
                        <li><a href="#">Pupi le lapin</a></li>
                        <li><a href="#">Mr Baobab</a></li>
                        <li><a href="#">Kaiwaii</a></li>
                        <li><a href="#">Perceval.eu</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">Belette</a></li>
                        <li><a href="#">Le concombre masqué</a></li>
                        <li><a href="#">Ptit prince</a></li>
                        <li><a href="#">Mr Fan</a></li>
                    </ul>
                </div>
            </footer>
        </div>
    </body>
</html>
