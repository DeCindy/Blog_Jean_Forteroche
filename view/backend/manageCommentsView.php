<?php $title = 'Administration - Commentaires'; ?>

<?php ob_start(); ?>

<header>
	<h4 class="center">Gérer les commentaires</h4>

</header>

<section>
	<div class="container">
	    <table class="striped centered">
	        <thead>
	          <tr>
	              <th>Numéro de Chapitre</th>
	              <th>Auteur</th>
	              <th>Commentaire</th>
	              <th>Date</th>
	              <th>Action</th>
	          </tr>
	        </thead>

	        <tbody>

	        <?php
            while($data = $comments->fetch())
            {
            ?>

	          <tr>
	            <td><strong><?= $data['chapter_id']; ?></strong></td>
	            <td><?= $data['author']; ?></td>
	            <td><strong><?= $data['comment']; ?></strong></td>
	            <td><?= $data['comment_date']; ?></td>
	            <td>
	            	<p><a href="index.php?action=changeComment&amp;id=<?=$data['id']?>"><i class="material-icons">create</i><br/>modifier</a></p>
	            	<p><a href="index.php?action=validateDelete&amp;id=<?=$data['id']?>&amp;auteur=<?=$data['author'] ?>&amp;chapitre=<?=$data['chapter_id'] ?>"><i class="material-icons">delete_forever</i><br/>supprimer</a></p>
	            </td>
	          </tr>

	        <?php
            }
            $comments->closeCursor();
            ?>

	        </tbody>
	      </table>
	</div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>