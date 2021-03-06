<?php $title = 'Administration - Chapitre'; ?>

<?php ob_start(); ?>

<header>
	<h4 class="center blue-text">Gérer les chapitres</h4>

</header>

<section>
	<div class="container">

		<!-- BOUTON POUR CREER UN NOUVEAU CHAPITRE -->
		<a class="waves-effect waves-light btn blue" href="index.php?action=writeChapter" id="buttonWriteChapter"><i class="material-icons left">create</i>Créer un nouveau chapitre</a>
		<!-- FIN -->

	    <table class="striped centered">

	    	<!-- ENTETE DU TABLEAU CHAPITRE -->
	        <thead>
	          	<tr>
	                <th>Numéro</th>
	                <th>Titre</th>
	                <th>Contenu</th>
	                <th>Action</th>
	            </tr>
	        </thead>
			<!-- FIN -->
			<tbody>

			<?php while($data = $chapters->fetch()):?>
				<!-- LIGNE DU TABLEAU CHAPITRE-->
	          	<tr>
		            <td><?= $data['id']; ?></td>
		            <td><?= '<strong>' . $data['title'] . '</strong>'; ?></td>
		            <td><?= $data['extract']; ?> [...]</td>
		            <td>
	            		<p><a href="index.php?action=changeChapter&amp;id=<?=$data['id']?>"><i class="material-icons">create</i>modifier</a></p>
	            		<p><a href="index.php?action=validateDelete&amp;id=<?=$data['id']?>&amp;title=<?=$data['title']?>"><i class="material-icons">delete_forever</i>supprimer</a></p>
	            	</td>
	          	</tr>
				<!-- FIN -->
			<?php endwhile;?>
	        <?php $chapters->closeCursor();?>

	        </tbody>
	    </table>
	</div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>