<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, user-scalable=no">
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
                    <?php
                    $commentManager = new Blog\Model\CommentManager();
                    $test = $commentManager->testReport();
                    if(!empty($test))
                    {
                    ?>
                        <li><a href="index.php?action=manageComments"><i class="material-icons red-text">warning</i></a></li>
                    <?php
                    }
                    ?>
                    <li><a href="index.php?action=adminView">Accueil</a></li>
                    <li><a href="index.php?action=editChapter">Gérer les chapitres</a></li>
                    <li><a href="index.php?action=manageComments">Gérer les commentaires</a></li>
                    <li><a href="index.php?action=home">Retour au site</a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                  <?php
                    $commentManager = new Blog\Model\CommentManager();
                    $test = $commentManager->testReport();
                    if(!empty($test))
                    {
                    ?>
                        <li><a href="index.php?action=manageComments"><i class="material-icons red-text">warning</i></a></li>
                    <?php
                    }
                    ?>
                    <li><a href="index.php?action=adminView">Accueil</a></li>
                    <li><a href="index.php?action=editChapter">Creer un nouveau chapitre</a></li>
                    <li><a href="index.php?action=manageComments">Gérer les commentaires</a></li>
                    <li><a href="index.php?action=home">Retour au site</a></li>
                </ul>
            </div>
      </nav>

		  <?= $content ?>

    	<script src="https://code.jquery.com/jquery-1.12.3.js"   integrity="sha256-1XMpEtA4eKXNNpXcJ1pmMPs8JV+nwLdEqwiJeCQEkyc="   crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
      <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
      <script>tinymce.init({ selector:'textarea' });</script>
      <script src="public/js/init.js"></script>
        
    </body>
</html>