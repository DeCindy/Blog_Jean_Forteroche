<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Lora:400i|Quattrocento" rel="stylesheet">
        <link rel="stylesheet" href="public/css/backend/style.css">

    </head>
        
    <body>
        <nav>
            <div class="nav-wrapper black">
                  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                  <ul class="right hide-on-med-and-down">
                    <li><a href="index.php?action=adminView">Accueil</a></li>
                    <li><a href="index.php?action=editChapter">Creer un nouveau chapitre</a></li>
                    <li><a href="index.php?action=manageComments">Gérer les commentaires</a></li>
                    <li><a href="index.php?action=home">Retour au site</a></li>
                  </ul>
                  <ul class="side-nav" id="mobile-demo">
                    <li><a href="#">Creer un nouveau chapitre</a></li>
                    <li><a href="#">Gérer les commentaires</a></li>
                    <li><a href="index.php?action=home">Retour au site</a></li>
                  </ul>
            </div>
      </nav>

		<?= $content ?>

    	<script src="https://code.jquery.com/jquery-1.12.3.js"   integrity="sha256-1XMpEtA4eKXNNpXcJ1pmMPs8JV+nwLdEqwiJeCQEkyc="   crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <script src="public/js/init.js"></script>
        
    </body>
</html>