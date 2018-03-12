<?php $title = 'Chapitre ' . $chapter['id'] . ' - ' . $chapter['title']; ?>

<?php ob_start(); ?>
<header>
	<div class="fixed-action-btn buttonHome">
		<a href="index.php?action=home" class="button"><i class="medium material-icons black-text">home</i></a>
	</div>
</header>

<section class="paragraph">
	<div class="container text">
		<h2><?= $chapter['title']; ?></h2>

		<p><?= $chapter['content']; ?></p>
	</div>
</section>

<section id="sectionComments">
	<div class="container comments">
		<div id="buttonComment">
			<p>Laissez votre commentaire<a class=" btn-floating btn-large modal-trigger brown lighten-4 pulse" href="#modal1"><i class="material-icons black-text">edit</i></a></p>
			
			<div id="modal1" class="modal">
	    		<div class="modal-content">
	      			<form action="encours.php" method="post">
			      		<div class="input-field col l6">
			      			<i class="material-icons prefix">account_circle</i>
			      			<input id="nameComment" type="text" class="validate">
			      			<label for="nameComment">Nom</label>
			      		</div>
			      		<div class="input-field col l6">
	          				<i class="material-icons prefix">mode_edit</i>
	          				<textarea id="messageComment" class="materialize-textarea"></textarea>
	          				<label for="messageComment">Message</label>
	       				</div>
	       				<div class="modal-footer">
	      					<button class="btn modal-close waves-effect waves-light brown lighten-4 black-text" type="submit" name="action">Envoyer<i class="material-icons right">send</i></button>
	    				</div>
					</form>
	    		</div>
	  		</div>
		</div> 

		<h4>Commentaires</h4>

		<?php
         while($data = $comments->fetch())
        {
        ?>

		<div class="userComment hoverable">
			<p><strong><?= $data['author']; ?></strong></p><span class="dateComment">Le <?= $data['comment_date_fr']; ?></span>
			<p><?= $data['comment']; ?></p>
			<a href="#" class="warning">Signaler ce contenu <i class="tiny material-icons red-text">warning</i></a>
		</div>

		<?php
        }
        $comments->closeCursor();
        ?>
	</div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>