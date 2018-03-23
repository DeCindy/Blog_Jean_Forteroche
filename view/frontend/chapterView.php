<?php $title = 'Chapitre ' . $chapter['id'] . ' - ' . $chapter['title']; ?>

<?php ob_start(); ?>
<!-- BOUTON HOME -->
<header>
	<div class="fixed-action-btn buttonHome">
		<a href="index.php?action=home" class="button"><i class="medium material-icons black-text">home</i></a>
	</div>
</header>
<!-- FIN -->

<!-- AFFICHAGE DU CHAPITRE -->
<section class="paragraph">
	<div class="container text">
		<h2><?= $chapter['title']; ?></h2>

		<p><?= $chapter['content']; ?></p>
	</div>
</section>
<!-- FIN -->

<section id="sectionComments">
	<div class="container comments">

		<!-- BOUTON AJOUTER COMMENTAIRE -->
		<div id="buttonComment">
			<p>Laissez votre commentaire<a class=" btn-floating btn-large modal-trigger brown lighten-4 pulse" href="#modal1"><i class="material-icons black-text">edit</i></a></p>
			
			<div id="modal1" class="modal">
	    		<div class="modal-content">
	      			<form action="index.php?action=addComment&amp;id=<?= $_GET['id'] ?>&amp;idmax=<?=$_GET['idmax']?>" method="post">
			      		<div class="input-field col l6">
			      			<i class="material-icons prefix">account_circle</i>
			      			<input id="author" name="author" type="text" class="validate" maxlength="30">
			      			<label for="author">Nom</label>
			      		</div>
			      		<div class="input-field col l6">
	          				<i class="material-icons prefix">mode_edit</i>
	          				<textarea id="comment" name="comment" class="materialize-textarea"></textarea>
	          				<label for="comment">Message</label>
	       				</div>
	       				<div class="modal-footer">
	      					<button class="btn modal-close waves-effect waves-light brown lighten-4 black-text" type="submit" name="action">Envoyer<i class="material-icons right">send</i></button>
	    				</div>
					</form>
	    		</div>
	  		</div>
		</div>
		<!-- FIN  -->

		<h4 id="commentaires">Commentaires</h4>
		
		<!-- AFFICHAGE DES COMMENTAIRES -->
		<?php
         while($data = $comments->fetch())
        {
        ?>

		<div class="userComment hoverable">
			<p><strong><?= $data['author']; ?></strong></p><span class="dateComment">Le <?= $data['comment_date_fr']; ?></span>
			<p><?= $data['comment']; ?></p>

			<?php
			if ($data['report'] === "1")
			{
			?>
			<p class="warning">Ce commentaire est en cours de modération</p>
			<?php
			}
			else
			{
			?>
			<a href="index.php?action=reportComment&amp;id=<?= $data['id'] ?>&amp;idchapter=<?= $data['chapter_id'] ?>&amp;idmax=<?= $_GET['idmax'] ?>" class="warning" onclick="return confirm('Confirmer le signalement ?');">Signaler ce contenu <i class="tiny material-icons red-text">warning</i></a>
			<?php
			}
			?>
		</div>

		<?php
        }
        $comments->closeCursor();
        ?>
        <!-- FIN -->
	</div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>