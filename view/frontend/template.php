<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, user-scalable=no">

        <title><?= $title ?></title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Lora:400i|Quattrocento" rel="stylesheet">
        <link rel="stylesheet" href="public/css/frontend/style.css">

    </head>
        
    <body>
    	<nav class="black"></nav>

        <h2 id="title" class="center-align"><i class="medium material-icons"">terrain</i><br/>UN BILLET<br/>POUR L'ALASKA</h2>
        
        <!-- BOUTON INFO AUTEUR/CONNECTION ADMIN -->
        <section class="info">
		    <div>
		        <ul id="slide-out" class="side-nav">
		            <img src="public/images/JeanForteroche.jpg" id="author">

		            <li>
		                <h3>Jean Forteroche</h3>
		            </li>
		            <li>
		                <p>Ecrivain à succès, nec piget dicere avide magis hanc insulam populum Romanum invasisse quam iuste. Ptolomaeo enim rege foederato nobis et socio ob aerarii nostri angustias iusso sine ulla culpa proscribi ideoque hausto veneno voluntaria morte deleto et tributaria facta est et velut hostiles eius exuviae classi inpositae in urbem advectae sunt per Catonem, nunc repetetur ordo gestorum.</p>
		            </li>
		            <li>
		                <a href="https://www.amazon.fr" target="_blank"><i class="material-icons">book</i>Retrouvez ses oeuvres</a>
		            </li>
		            <li>
		                <div class="divider"></div>
		            </li>
		            <li>
		                <a class="subheader">Administration</a>
		            </li>
		            <li>
		                <a class="waves-effect" href="index.php?action=loginView">Connectez-vous</a>
		            </li>
		        </ul>

		        <a href="#" data-activates="slide-out" class="fixed-action-btn button-collapse"><i class="medium material-icons black-text">info</i></a>
		    </div>
		</section>
		<!-- FIN -->

        <?= $content ?>

		
        <script src="https://code.jquery.com/jquery-1.12.3.js"   integrity="sha256-1XMpEtA4eKXNNpXcJ1pmMPs8JV+nwLdEqwiJeCQEkyc="   crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <script src="public/js/init.js"></script>
        
    </body>
</html>