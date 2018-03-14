<?php $title = 'Administration - Ecrire un chapitre'; ?>

<?php ob_start(); ?>

<div class="container">
	<form action="index.php?action=addChapter" method="post">
		<input type="text" name="title" placeholder="Ecrivez votre titre ici">
		<textarea name="content"></textarea>
		<button class="btn waves-effect waves-light blue" type="submit" name="action">Submit<i class="material-icons right">send</i></button>
        
	</form>
</div> 		


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>