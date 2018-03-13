<?php $title = 'Administration - Bienvenue'; ?>

<?php ob_start(); ?>

<header>
	<h2 id="title" class="center-align"><i class="medium material-icons"">terrain</i><br/>UN BILLET<br/>POUR L'ALASKA</h2>
	<h3 class="center-align blue-text">ADMINISTRATION</h3>

</header>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>