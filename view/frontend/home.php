<?php $title = 'Billet simple pour l\'Alaska de Jean Forteroche'; ?>

<?php ob_start(); ?>
<header>
    <div class="container">
        <div class="slider">
            <ul class="slides">
                <li>
                    <img src="">
                    <div class="caption center-align">
                        <h3>Vivez une incroyable<br/> expérience de lecture</h3>
                        <h5>Ecrivez l'histoire avec l'auteur</h5>
                    </div>
                </li>
                <li>
                    <div class="caption left-align">
                        <h3>Chaque semaine <br/>un nouveau chapitre</h3>
                        <h5>Écrit après lecture des commentaires du précédent</h5>
                    </div>
                </li>
                <li>
                    <div class="caption right-align">
                        <h3>Alors participez en écrivant<br/> dans les commentaires !</h3>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</header>

<section class="container">
        <ul class="collapsible" data-collapsible="accordion">
            <?php
            while($data = $chapters->fetch())
            {
            ?>

            <li class="hoverable">
                <?php
                if($data['id'] == $maxId['id_max'])
                {
                ?>
                <div class="collapsible-header active">
                <?php
                }
                else
                {
                ?>
                <div class="collapsible-header">
                <?php
                }
                ?>
                    <span class="titleChapitre"><i class="material-icons">import_contacts</i><strong>Chapitre <?= $data['id']; ?></strong></span>
                    <?php
                    $commentManager = new Blog\Model\CommentManager();
                    $maxComments = $commentManager->getMaxComment($data['id']);
                    ?>
                    <span class="nbrComment"><?= $maxComments['nbr_id']; ?> commentaire(s)<i class="material-icons">chat_bubble_outline</i></span>
                </div>
                
                <div class="collapsible-body">
                    <h5><?= htmlspecialchars($data['title']); ?></h5>
                    <span class="date">Publié le <?= $data['content_date_fr']; ?></span>
                    <span><?= $data['extract']; ?> [...]</span>
                    <a href="index.php?action=chapterView&amp;id=<?=$data['id']?>&amp;idmax=<?=$maxId['id_max']?>">Lire la suite</a>
                </div>
            </li>

            <?php
            }
            $chapters->closeCursor();
            ?>
        </ul>
</section>



<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>