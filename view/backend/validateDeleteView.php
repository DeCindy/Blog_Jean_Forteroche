<?php $title = 'Administration - Supprimer'; ?>

<?php ob_start(); ?>

<div class="container validation">
	<!-- AFFICHAGE VALIDATION SI SUPPRESSION DU CHAPITRE -->
	<?php if(!empty($_GET['title'])):?>
	<h4> Voulez-vous supprimer le chapitre N° <?=$_GET['id'] ?><br/><strong><?= $_GET['title'] ?></strong> ?</h4>
	
	<a class="waves-effect waves-light btn blue" href="index.php?action=deleteChapter&amp;id=<?=$_GET['id']?>">OUI</a>
	<a class="waves-effect waves-light btn blue" href="index.php?action=editChapter">NON</a>
	<!-- FIN -->

	<!-- AFFICHAGE VALIDATION SI SUPRESSION DU COMMENTAIRE -->
	<?php else:?>
	<h4> Voulez-vous supprimer ce commentaire de <strong><?=$_GET['auteur'] ?></strong><br/> sous le chapitre N° <strong><?=$_GET['chapitre'] ?></strong> ?</h4>
	
	<a class="waves-effect waves-light btn blue" href="index.php?action=deleteComment&amp;id=<?=$_GET['id']?>">OUI</a>
	<a class="waves-effect waves-light btn blue" href="index.php?action=manageComments">NON</a>
	<!-- FIN -->
	<?php endif ?>

</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>