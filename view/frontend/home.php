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
            <li class="hoverable">
                <div class="collapsible-header active">
                    <span class="titleChapitre"><i class="material-icons">import_contacts</i><strong>Chapitre 3</strong></span>
                    <span class="nbrComment">2 commentaire(s)<i class="material-icons">chat_bubble_outline</i></span>
                </div>
                <div class="collapsible-body">
                    <h5>Cette nuit là</h5>
                    <span class="date">Publié le : 01/01/2018</span>
                    <span>Bruits de moteurs diminuaient, mais pas à clef. Appuyons donc tant qu'on n'y avait pas trop de la terre ni du pays du rêve enfin retrouvé. Tenant entre mes dents ces tristes paroles semblent une prophétie. Bois de l'ouest et de déverser l'eau des roches, ne voyait plus quelle conduite tenir. Dix-huit printemps formaient son âge ; les auteurs de cette véridique histoire, dit l'étranger en lui faisant prendre moi-même le contrepoison qui l'a porté ? Étendu sur le sol noirci rampaient des bouffées de gaieté. Viens avec moi, les deux amours tels que les rapports inter-groupes. Voyez celui-ci, froid comme une tôle mate... </span>
                    <a href="index.php?action=chapitreView">Lire la suite</a>
                </div>
            </li>
            <li class="hoverable">
                <div class="collapsible-header">
                    <span class="titleChapitre"><i class="material-icons">import_contacts</i><strong>Chapitre 2</strong></span>
                    <span class="nbrComment">10 commentaire(s)<i class="material-icons">chat_bubble_outline</i></span>
                </div>
                <div class="collapsible-body">
                    <h5>Blablabla</h5>
                    <span class="date">Publié le : 01/01/2018</span>
                    <span>Bruits de moteurs diminuaient, mais pas à clef. Appuyons donc tant qu'on n'y avait pas trop de la terre ni du pays du rêve enfin retrouvé. Tenant entre mes dents ces tristes paroles semblent une prophétie. Bois de l'ouest et de déverser l'eau des roches, ne voyait plus quelle conduite tenir. Dix-huit printemps formaient son âge ; les auteurs de cette véridique histoire, dit l'étranger en lui faisant prendre moi-même le contrepoison qui l'a porté ? Étendu sur le sol noirci rampaient des bouffées de gaieté. Viens avec moi, les deux amours tels que les rapports inter-groupes. Voyez celui-ci, froid comme une tôle mate... </span>
                    <a href="index.php?action=chapitreView">Lire la suite</a>
                </div>
            </li>
            <li class="hoverable">
                <div class="collapsible-header">
                    <span class="titleChapitre"><i class="material-icons">import_contacts</i><strong>Chapitre 1</strong></span>
                    <span class="nbrComment">22 commentaire(s)<i class="material-icons">chat_bubble_outline</i></span>
                </div>
                <div class="collapsible-body">
                    <h5>Blablabla</h5>
                    <span class="date">Publié le : 01/01/2018</span>
                    <span>Bruits de moteurs diminuaient, mais pas à clef. Appuyons donc tant qu'on n'y avait pas trop de la terre ni du pays du rêve enfin retrouvé. Tenant entre mes dents ces tristes paroles semblent une prophétie. Bois de l'ouest et de déverser l'eau des roches, ne voyait plus quelle conduite tenir. Dix-huit printemps formaient son âge ; les auteurs de cette véridique histoire, dit l'étranger en lui faisant prendre moi-même le contrepoison qui l'a porté ? Étendu sur le sol noirci rampaient des bouffées de gaieté. Viens avec moi, les deux amours tels que les rapports inter-groupes. Voyez celui-ci, froid comme une tôle mate... </span>
                    <a href="index.php?action=chapitreView">Lire la suite</a>
                </div>
            </li>
        </ul>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>