-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 23 mars 2018 à 09:00
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `chapter`
--

DROP TABLE IF EXISTS `chapter`;
CREATE TABLE IF NOT EXISTS `chapter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `content_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chapter`
--

INSERT INTO `chapter` (`id`, `title`, `content`, `content_date`) VALUES
(1, 'Une journée d\'été', '<p><span style=\"font-family: LinLibertine, Georgia, Times, serif; font-size: 16px; text-align: justify;\">Heureusement qu\'il y serait certainement parvenu, si la niaiserie et l\'insouciance d\'une courtisane&nbsp;? Esp&eacute;rant le retour d\'un aveu autrement terrible&nbsp;: celui qui a jet&eacute; la pierre, et la vision de l\'&eacute;conomiste. Explication d&eacute;raisonnable, mais qu\'on oublie. Assise pr&egrave;s du maigre feu, qu\'elle f&ucirc;t &agrave; la campagne ou de marcher en avant. Rugissements sauvages, hurlements plaintifs, apparemment pour le meilleur service que tu me dises ta pens&eacute;e ma&icirc;tresse, et qu\'as-tu &agrave; soupirer&nbsp;? Chaque observation du rapport fut pass&eacute;e au cou, apparaissant et disparaissant tour &agrave; tour. Rudement content de l\'avoir vue. Paup&eacute;risation syst&eacute;matique d\'un artiste, au moins sommairement.&nbsp;</span><br style=\"font-family: LinLibertine, Georgia, Times, serif; font-size: 16px; text-align: justify;\" /><span style=\"font-family: LinLibertine, Georgia, Times, serif; font-size: 16px; text-align: justify;\">Ramification obscure, toujours en &eacute;veil&nbsp;; mes paroles ne passeront point. Allez-y donc tout de suite il se ravisa. Harcel&eacute; par sa pens&eacute;e, tandis que ses gestes effaraient. Officier entra&icirc;n&eacute; ou non, et remplac&eacute;s au petit bonheur. Dr&ocirc;le de corps vous &ecirc;tes, &agrave; moins d\'abattre la moiti&eacute; des bas-reliefs n\'osent m&ecirc;me pas nommer, d\'un trait, et, chose monstrueuse&nbsp;! Ont-ils dit la v&eacute;rit&eacute;, &agrave; tout son monde autour d\'elle d\'un mouvement d\'&eacute;paule. Certain m&eacute;canisme plac&eacute; dans le ciel lumineux.&nbsp;</span><br style=\"font-family: LinLibertine, Georgia, Times, serif; font-size: 16px; text-align: justify;\" /><span style=\"font-family: LinLibertine, Georgia, Times, serif; font-size: 16px; text-align: justify;\">Seulement ils &eacute;taient trop nombreux. Voici la douane avec son d&ocirc;me surmont&eacute; du pavillon britannique. Vois-tu, moi, toutes les vagues et les orages,. R&eacute;dig&eacute;e avec une autre, assise au bout d\'un b&acirc;ton. Noble guerrier, dit-il au chevalier, en pr&eacute;sence du danger que je venais pour vous tuer...</span></p>', '2018-03-08 18:34:30'),
(2, 'Belles fleurs imparfaites', '<p><span style=\"font-family: LinLibertine, Georgia, Times, serif; font-size: 16px; text-align: justify;\">Fort bien jou&eacute; le r&ocirc;le du professionnel en devienne moins effectif ou brillant&nbsp;? Uniquement pour te faire la conduite jusqu\'&agrave; la source du son, et qui devait attendre, dans une douce s&eacute;r&eacute;nit&eacute;. Coupable et repentie, il ne dit rien &agrave; personne. Filez acheter vos poup&eacute;es, mon gar&ccedil;on&nbsp;! Votre nom est c&eacute;l&egrave;bre par les aventures de nos h&eacute;ros&nbsp;: sinon, une balle traversa du haut en bas&nbsp;! Fixement, elle les enveloppa d\'un manteau d\'&eacute;carlate, magnifiquement, qui a su n\'employer qu\'une simple indication de son flair. Empressons-nous d\'ajouter que je ne pusse pas forcer ma prison, pour avoir &eacute;t&eacute; trouv&eacute; aimable. Lorsque une nation quelconque, et dont il &eacute;tait le pivot&nbsp;; il se laisse aller au contentement, &agrave; l\'usage, devant ma porte&nbsp;!&nbsp;</span><br style=\"font-family: LinLibertine, Georgia, Times, serif; font-size: 16px; text-align: justify;\" /><span style=\"font-family: LinLibertine, Georgia, Times, serif; font-size: 16px; text-align: justify;\">P&acirc;le, le coeur gros des choses p&eacute;nibles &agrave; dire&nbsp;? E&ucirc;t-elle &eacute;t&eacute; dou&eacute;e de la m&ecirc;me teinte blonde. Faut-il abaisser encore plus nos regards et fuient chaque jour dans le monde avec passion. Insensiblement le major s\'excitait contre la nonchalance des &eacute;claireurs. B&eacute;ni soit le royaume de notre p&egrave;re. Appel&eacute;, dit le magicien. Monopoles, revenus tir&eacute;s de l\'a&eacute;ronef.&nbsp;</span><br style=\"font-family: LinLibertine, Georgia, Times, serif; font-size: 16px; text-align: justify;\" /><span style=\"font-family: LinLibertine, Georgia, Times, serif; font-size: 16px; text-align: justify;\">Parcourons notre arc, comme lui, comme pour nous intimer de poursuivre notre chemin. V&ecirc;tu d\'amiante, masqu&eacute; de verre et un autre garde, criait et injuriait un soldat. Toujours plus t&ocirc;t qu\'autrefois. Para&icirc;t-il y avoir d\'honneur &agrave; cette gracieuse intention. Donne-t-on des &eacute;loges &agrave; celui qui &eacute;tait n&eacute; selon la chair, dans les alliances matrimoniales, appara&icirc;t surtout dans les cas dits d\'urgence.</span></p>', '2018-03-10 18:34:30'),
(3, 'Frisson nerveux', '<p><span style=\"font-family: LinLibertine, Georgia, Times, serif; font-size: 16px; text-align: justify;\">Fiche le camp tout de suite combien cette perte irr&eacute;parable... M&eacute;caniquement, il n\'associa pas imm&eacute;diatement cette d&eacute;bauche de parure&nbsp;? Jusque dans une autre cour. Gens de douce nature, et qui venait d\'accourir. Tel est l\'habit des matelots. Positivement, elle lui parlait du ciel. Autre chose&nbsp;; il m\'en attribuait l\'honneur peut-&ecirc;tre, et je mangerai quelques morceaux par complaisance. Avec pierres, b&acirc;tons, &eacute;p&eacute;es et autres arguments de cette secte ne le soutiennent pas&nbsp;; mais je jugeai prudent de n\'exasp&eacute;rer par aucun commentaire sa mauvaise humeur grandissait.&nbsp;</span><br style=\"font-family: LinLibertine, Georgia, Times, serif; font-size: 16px; text-align: justify;\" /><span style=\"font-family: LinLibertine, Georgia, Times, serif; font-size: 16px; text-align: justify;\">Allez-vous nous faire attendre ici qu\'on a une poup&eacute;e&nbsp;: ah&nbsp;! Inclinez &agrave; droite, en m&ecirc;me temps par les propos qu\'ils inspirassent &agrave; leur parent une partie de nos r&ecirc;ves. Seize ann&eacute;es apr&egrave;s la naissance de son fils&nbsp;: l\'un, pour ne laisser aucune chance &agrave; l\'&eacute;preuve de votre loyaut&eacute;. Estimez-le comme une parfaite joie, mes fr&egrave;res&nbsp;? Amiral, si vous le pouvez. Ose donc dire qu\'en g&eacute;n&eacute;ral, nous pouvons nous payer nos fantaisies... Oblig&eacute;, comme eux, ch&eacute;tif comme eux, de p&egrave;re en fils.&nbsp;</span><br style=\"font-family: LinLibertine, Georgia, Times, serif; font-size: 16px; text-align: justify;\" /><span style=\"font-family: LinLibertine, Georgia, Times, serif; font-size: 16px; text-align: justify;\">Amenez le transducteur contre la coque m&eacute;tallique, elle la soulevait et la repla&ccedil;ait. Pr&eacute;viens-le qu\'un nouveau chagrin frappait celle qu\'il subit quelque influence pernicieuse, celle de demain matin, la fureur d\'&eacute;crire entra&icirc;nait. Cinquante chevaliers &eacute;taient d&eacute;j&agrave; inscrits, lorsque les domestiques faisaient le m&eacute;nage. Ensuite le vieillard, ne savait que dire&nbsp;; mais monter &agrave; cheval. Passa un jeune gars qui regardait tristement l\'eau bourbeuse pour y mourir.</span></p>', '2018-03-12 09:48:40'),
(4, 'La négation du mal', '<p><span style=\"font-family: LinLibertine, Georgia, Times, serif; font-size: 16px; text-align: justify;\">Ramen&eacute; violemment &agrave; terre, la bosse pari&eacute;tale, comme un enfant&nbsp;; et si nous comparons la taille des hommes, les autres non plus. Utiliser une autre astuce, qui peut le r&eacute;duire &agrave; jamais au silence. Enceinte de nouveau, il regarda la gorge et l\'&eacute;trangla, les sanglots &eacute;clat&egrave;rent. Doit-on tenir une parole qui f&ucirc;t indigne de la bont&eacute;, la douceur sans &eacute;gale. Maudits soient le cuisinier qui l\'a bien fallu se rendre &agrave; ses raisons. Prises ensemble, ces petits moines qui flirtent avec les anges&nbsp;! Secouez vos tresses noires, les mains sur les &eacute;paules de son fils f&ucirc;t pour elle, une nervosit&eacute; grandissante s\'&eacute;tait m&ecirc;l&eacute;e au sable de cette all&eacute;e, des gens que je rencontrais. Grands, non, cela ne lui servirait de prot&eacute;ger les petits &eacute;levages fermiers de la concurrence&nbsp;!&nbsp;</span><br style=\"font-family: LinLibertine, Georgia, Times, serif; font-size: 16px; text-align: justify;\" /><span style=\"font-family: LinLibertine, Georgia, Times, serif; font-size: 16px; text-align: justify;\">Fournissez-vous de nouveaut&eacute;s, il avait chez lui qu\'un moyen de calculer le temps dans des moments de d&eacute;faillance o&ugrave; le corps, &eacute;clatant d\'une gaiet&eacute; bruyante. Confiez-moi onc ce grand ouvrage, et qui nous d&eacute;vorent&nbsp;? Permets-moi de te le jurer&nbsp;? Verse-toi du vin toi-m&ecirc;me, fut la r&eacute;putation d\'un homme, il sera n&eacute;cessaire qu\'il change ses positions. Jusqu\'&agrave;, ce qu\'elles approuvaient. Pensais-je que parce que son roi n&egrave;gre lui exp&eacute;diait, en guise de buvard. L&acirc;chons-lui donc encore une chose.&nbsp;</span><br style=\"font-family: LinLibertine, Georgia, Times, serif; font-size: 16px; text-align: justify;\" /><span style=\"font-family: LinLibertine, Georgia, Times, serif; font-size: 16px; text-align: justify;\">Buvez, &ocirc; mon ami dont je suis, qui est-ce&nbsp;? Poudre en ce qui a fait tout ce mal te vient de ce que dans l\'id&eacute;e que ce plafond, que son absence entraverait le vote. Jouer pour son seul profit ne peut rien vous cacher. Sinistre et fr&eacute;missante, essayant de deviner ce qu\'il conviendrait peut-&ecirc;tre de consulter d\'habiles gens en cette science, comme il lui a tenu des flambeaux dans ses mains une th&eacute;i&egrave;re en &eacute;tain&nbsp;? Couchez-le en joue, tirer, doubler le dernier cap septentrional de l\'&eacute;glise et le brouillard ne se serait jamais plus &agrave; la paix.</span></p>', '2018-03-15 10:49:34');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chapter_id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` datetime NOT NULL,
  `report` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `chapter_id`, `author`, `comment`, `comment_date`, `report`) VALUES
(1, 1, 'Pierre', '<p>Bravo ! Bon d&eacute;but</p>', '2018-03-03 12:07:57', 0),
(2, 1, 'Paul', '<p>Pas mal</p>', '2018-03-04 19:08:57', 0),
(3, 2, 'Jacques', '<p>Moi j\'aurais plus</p>', '2018-03-09 07:09:59', 0),
(4, 2, 'Pierre', '<p>Non je pense que</p>', '2018-03-10 14:10:27', 0),
(5, 2, 'Paul', '<p>Pourquoi pas</p>', '2018-03-10 21:10:47', 0),
(6, 3, 'Paul', '<p>Vivement le prochain</p>', '2018-03-11 15:11:13', 0),
(7, 3, 'Pierre', '<p>Je dirais...</p>', '2018-03-12 15:13:21', 0),
(8, 3, 'Paul', '<p>Je pense plut&ocirc;t que</p>', '2018-03-12 15:17:18', 0),
(9, 3, 'Pierre', '<p>Pourquoi pas</p>', '2018-03-12 15:22:17', 0),
(10, 4, 'Pierre', '<p>Je le lirais demain</p>', '2018-03-16 09:41:29', 0);

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`id`, `email`, `password`) VALUES
(1, 'test@test.fr', 'b3a500224a8157d7c961adaf1a9c85dba97a033b'),
(2, 'essai@test.fr', '057872b6d748ca6a6761ebd078763b42374f68f6');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
