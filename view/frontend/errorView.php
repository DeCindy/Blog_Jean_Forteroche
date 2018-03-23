<?php $title = 'Erreur'; ?>

<?php ob_start(); ?>
<META HTTP-EQUIV="Refresh" CONTENT="5;index.php?action=home">

<div class="text container center">
	<i class="large material-icons red-text">error_outline</i>
	<h5>Une erreur s'est produite : <strong><?= $messageError ?></strong></h5>
	<p>Vous allez être redirigé vers la page d'accueil</p>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>