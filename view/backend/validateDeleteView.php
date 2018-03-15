<?php $title = 'Administration - Supprimer'; ?>

<?php ob_start(); ?>

<div class="container validation">

	<h4> Voulez vous supprimer le chapitre N° <?=$_GET['id'] ?> <br/><strong><?= $_GET['title'] ?></strong></h4>
	
	<a class="waves-effect waves-light btn blue" href="index.php?action=deleteChapter&amp;id=<?=$_GET['id']?>">OUI</a>
	<a class="waves-effect waves-light btn blue" href="index.php?action=editChapter">NON</a>

</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>