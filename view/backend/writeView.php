<?php $title = 'Administration - Ecrire un chapitre'; ?>

<?php ob_start(); ?>

<div class="container">
	<!-- SI CHAPITRE A MODIFIER -->
	<?php 
	if(!empty($chapter['id']))
	{ 
	?>
		<form action="index.php?action=updateChapter&amp;id=<?=$chapter['id']; ?>" method="post">
		<input type="text" name="title" value="<?= $chapter['title']; ?>">
		<textarea name="content"><?= $chapter['content']; ?></textarea>
	<!-- FIN -->

	<!-- SI COMMENTAIRE A MODIFIER -->
	<?php
	} 
	else if(!empty($comment['id']))
	{ 
	?>
		<form action="index.php?action=updateComment&amp;id=<?=$comment['id']; ?>" method="post">
		<textarea name="comment"><?= $comment['comment']; ?></textarea>
	<!-- FIN -->

	<!-- SI CHAPITRE A CREER  -->
	<?php
	} 
	else
	{ 
	?>
		<form action="index.php?action=addChapter" method="post">
		<input type="text" name="title" placeholder="Ecrivez votre titre ici">
		<textarea name="content"></textarea>
	<!-- FIN -->
	<?php
    }
    ?>

	<button class="btn waves-effect waves-light blue" type="submit" name="action">Submit<i class="material-icons right">send</i></button>
        
	</form>
</div> 		


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>