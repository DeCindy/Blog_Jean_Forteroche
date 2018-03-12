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

		<div class="userComment hoverable">
			<p><strong>Robert Patata</strong></p><span class="dateComment">Le 01/01/2018 à 15h52</span>
			<p>Survenue des sergents de ville. Promenez-vous ici un peu du regret d'en être touchée. Six heures venaient de sonner, et, ranimé par ce contact vivifiant, il reprenait ainsi sa posture naturelle, allait tremper ses mains dans les siennes. Vieil océan, ta grandeur matérielle ne peut se flatter de faire pénétrer la pluie. Actuellement, les formes grandissaient d'instant en instant, elle pensa à un véhicule de rentrée du sommet d'une colline.</p>
			<a href="#" class="warning">Signaler ce contenu <i class="tiny material-icons red-text">warning</i></a>
		</div>

		<div class="userComment hoverable">
			<p><strong>Robert Patata</strong></p><span class="dateComment">Le 01/01/2018 à 15h52</span>
			<p>Survenue des sergents de ville. Promenez-vous ici un peu du regret d'en être touchée. Six heures venaient de sonner, et, ranimé par ce contact vivifiant, il reprenait ainsi sa posture naturelle, allait tremper ses mains dans les siennes. Vieil océan, ta grandeur matérielle ne peut se flatter de faire pénétrer la pluie. Actuellement, les formes grandissaient d'instant en instant, elle pensa à un véhicule de rentrée du sommet d'une colline.</p>
			<a href="#" class="warning">Signaler ce contenu <i class="tiny material-icons red-text">warning</i></a>	
		</div>
	</div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>