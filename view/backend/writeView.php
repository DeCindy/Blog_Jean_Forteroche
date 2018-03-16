<?php $title = 'Administration - Ecrire un chapitre'; ?>

<?php ob_start(); ?>

<div class="container">
	<?php 
	if(!empty($chapter['id']))
	{ 
	?>
		<form action="index.php?action=updateChapter&amp;id=<?=$chapter['id']; ?>" method="post">
		<input type="text" name="title" value="<?= $chapter['title']; ?>">
		<textarea name="content"><?= $chapter['content']; ?></textarea>

	<?php
	} 
	else if(!empty($comment['id']))
	{ 
	?>
		<form action="index.php?action=updateComment&amp;id=<?=$comment['id']; ?>" method="post">
		<textarea name="comment"><?= $comment['comment']; ?></textarea>

	<?php
	} 
	else
	{ 
	?>
		<form action="index.php?action=addChapter" method="post">
		<input type="text" name="title" placeholder="Ecrivez votre titre ici">
		<textarea name="content"></textarea>

	<?php
    }
    ?>

	<button class="btn waves-effect waves-light blue" type="submit" name="action">Submit<i class="material-icons right">send</i></button>
        
	</form>
</div> 		


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>