<?php $title = 'Administration - Chapitre'; ?>

<?php ob_start(); ?>

<header>
	<h3 class="center">Gérer les chapitres</h3>

</header>

<section>
	<div class="container">
		<a class="waves-effect waves-light btn blue" href="index.php?action=writeChapter"><i class="material-icons left">create</i>Créer un nouveau chapitre</a>

	    <table class="striped centered ">
	        <thead>
	          <tr>
	              <th>Numéro</th>
	              <th>Titre</th>
	              <th>Contenu</th>
	              <th>Action</th>
	          </tr>
	        </thead>

			<tbody>

			<?php
            while($data = $chapters->fetch())
            {
            ?>

	          <tr>
	            <td><?= $data['id']; ?></td>
	            <td><?= '<strong>' . $data['title'] . '</strong>'; ?></td>
	            <td><?= $data['extract']; ?></td>
	            <td>
	            	<p><a href=""><i class="material-icons">create</i>modifier</a></p>
	            	<p><a class="modal-trigger" href="#modal1"><i class="material-icons">delete_forever</i>supprimer</a></p>
	            		<div id="modal1" class="modal">
    						<div class="modal-content">
      							<h4>Supprimer un chapitre</h4>
      							<p>Vouler vous supprimer le chapitre N°<?= $data['id']; ?> <?= $data['title']; ?> ? </p>
    						</div>
    						<div class="modal-footer">
      							<a href="index.php?action=deleteChapter&amp;id=<?=$data['id']?>" class="modal-action modal-close waves-effect waves-green btn-flat">OUI</a>
      							<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">NON</a>
    						</div>
  						</div>
	            </td>
	          </tr>

	        <?php
            }
            $chapters->closeCursor();
            ?>

	        </tbody>
	    </table>
	</div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>