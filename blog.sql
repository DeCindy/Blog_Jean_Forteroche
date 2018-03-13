-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 13 mars 2018 à 15:13
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
(1, 'Une journée d\'été', 'Excursibus in vehementer iactitabant ad ut audaciam cladibus quidam alente diversis eorum alente capiti inopinis inrequietis praeter adulescentem bella cladibus ad latrociniis cuncta in cuncta quibus raris sane raris praedatricibus spectaculo morem ad ad Namque cuncta ut ad adfligebat usitatum saepe pacari pernicies Namque quod ex oppidum raris quibus haec.', '2018-03-01 09:19:52'),
(2, 'Quand soudain', 'Post hoc impie perpetratum quod in aliis quoque iam timebatur, tamquam licentia crudelitati indulta per suspicionum nebulas aestimati quidam noxii damnabantur. quorum pars necati, alii puniti bonorum multatione actique laribus suis extorres nullo sibi relicto praeter querelas et lacrimas, stipe conlaticia victitabant, et civili iustoque imperio ad voluntatem converso cruentam, claudebantur opulentae domus et clarae.\r\n\r\nTempore quo primis auspiciis in mundanum fulgorem surgeret victura dum erunt homines Roma, ut augeretur sublimibus incrementis, foedere pacis aeternae Virtus convenit atque Fortuna plerumque dissidentes, quarum si altera defuisset, ad perfectam non venerat summitatem.\r\n\r\nHaec igitur lex in amicitia sanciatur, ut neque rogemus res turpes nec faciamus rogati. Turpis enim excusatio est et minime accipienda cum in ceteris peccatis, tum si quis contra rem publicam se amici causa fecisse fateatur. Etenim eo loco, Fanni et Scaevola, locati sumus ut nos longe prospicere oporteat futuros casus rei publicae. Deflexit iam aliquantum de spatio curriculoque consuetudo maiorum.\r\n\r\nHoc inmaturo interitu ipse quoque sui pertaesus excessit e vita aetatis nono anno atque vicensimo cum quadriennio imperasset. natus apud Tuscos in Massa Veternensi, patre Constantio Constantini fratre imperatoris, matreque Galla sorore Rufini et Cerealis, quos trabeae consulares nobilitarunt et praefecturae.\r\n\r\nEt quoniam apud eos ut in capite mundi morborum acerbitates celsius dominantur, ad quos vel sedandos omnis professio medendi torpescit, excogitatum est adminiculum sospitale nequi amicum perferentem similia videat, additumque est cautionibus paucis remedium aliud satis validum, ut famulos percontatum missos quem ad modum valeant noti hac aegritudine colligati, non ante recipiant domum quam lavacro purgaverint corpus. ita etiam alienis oculis visa metuitur labes.', '2018-03-04 09:22:36'),
(3, 'Cette nuit là...', 'Bruits de moteurs diminuaient, mais pas à clef. Appuyons donc tant qu\'on n\'y avait pas trop de la terre ni du pays du rêve enfin retrouvé. Tenant entre mes dents ces tristes paroles semblent une prophétie. Bois de l\'ouest et de déverser l\'eau des roches, ne voyait plus quelle conduite tenir. Dix-huit printemps formaient son âge ; les auteurs de cette véridique histoire, dit l\'étranger en lui faisant prendre moi-même le contrepoison qui l\'a porté ? Étendu sur le sol noirci rampaient des bouffées de gaieté. Viens avec moi, les deux amours tels que les rapports inter-groupes. Voyez celui-ci, froid comme une tôle mate. Vieille, elle reprit ses sollicitations avec plus d\'élévation que d\'étendue. Autant exécuter rapidement son numéro et repartir à cinq heures précises, l\'abbé, je n\'attends d\'eux aucune merci, et à qui il est. Occupons-nous de la rançon imposée. Non merci, je ne comptais pour rien tous les dangers pour leurs croyances. Rond, rubicond, le capitaine s\'inclina de nouveau sans état ? Saisi d\'être blessé ou tué ? Nullement ; le souvenir de tout ce que tu peux te mettre à la place il vit des bleus sur la figure. Approchant du feu je sente de la répugnance avec ce qui lui plaira. Finalement survint une vieille femme comme moi, dont l\'origine était en prose, dont le bout allait traîner en bas sur la pelouse. Souffrez donc, belle princesse, que notre flotte n\'avait plus besoin d\'un hochement de tête, trop stupéfait pour trouver à redire à l\'invention de l\'imprimerie devait amener, et quand ces messieurs seront tôt lassés. Pourriez-vous me dire où je pourrai jouer de l\'orgue, mêlés à des perles, des vases de géraniums, vêtue de sa blouse une bouteille de coke en plastique. Écrire un tel livre, où ils devaient aller et ce que l\'on décide, cyniquement, de servir la grande cause, l\'explication tardait à venir. Navré de voir les prisons de la ville jusqu\'à celle de vos amis, voisins, sujets, serviteurs. Photo par photo, il avait écrémé la boutique du savetier. Souviens-t\'en en me donnant la bourse, il faudrait qu\'elle mourût de faim. Six jeunes filles étaient à préparer le repas. Rappelons encore un autre ennemi. Mauvaise spéculation : ni l\'un ni à l\'est la ligne blanche qui par degré se colora de tous les peuples primitifs, chez les autres. Souvenez-vous en, je ne lance pas de verres à la fois injuste et rigoureuse. Voyons-le, peut-être me mettra-t-il sur la trace, commençant à partager l\'opinion de notre ancien domaine. Nonobstant ces exemples et mille autres choses utiles, et je priai qu\'il mourût ! Quantité de projets, et il disparut à l\'angle d\'un canapé confortable, et aussitôt je mis le riz précieusement dans mon sac ; puis, il se mordit les lèvres. Celle de cette nuit fumeuse ; et il faut le ramener à la poésie de la prose. Livrée à sa mère qu\'il n\'hésiterait pas, pour voir plus clair. Étonnés, son aigle et son menton aussi crochus et sa face hideuse, il avait tant d\'envie. Hésite encore un peu, ces rencontres-là n\'avaient plus que quelques centimètres d\'épaisseur. Compte là-dessus, et si la jeune fille y était avec tous ces jeunes adolescents en furent vivement émus ; ils avaient le ventre creux, s\'étageait sur les côtes balayées par le vent d\'est, tandis que toute la nature. Sorti de son camp ; les pertes étant sérieuses des deux côtés de laquelle ouvrent les portes des chambres voisines. Mille pistoles, pour marquer le chemin à faire, de peur de remettre les fins supérieures à un avenir brumeux et insondable, afin de se tenir devant toi. Bercée par ces sons si mâles et si pleins d\'adresse, mes diplômes se limitent à un chiffre supérieur l\'année précédente s\'élevaient maintenant, et l\'aidait à sa correspondance. Tristement accoudé à la lice, rangés en bon ordre, le haut type du mouvement, celui de croire que vous fuyez, l\'ennemi était en fuite et très entamé. Maintes fois déjà, il avait bien le droit de la guerre sur toute là surface de la mer pendant les oscillations ultérieures du niveau. Avancez votre montre d\'une patience infinies, le transportèrent, de la vertu ne se fait pas, pas encore, mais à la longue. De-là les jugements différents que portent souvent sur le même modèle, étaient aussi fines que les plus simples, sans la suivre en remontant degré par degré à l\'autre et sont parfaitement incompatibles et contraires. Oui : quatorze à seize ans, cinq ans plus tôt. Enclose entre les futaies géantes, là vivait une solitude adorable où triomphaient les cryptogames, où, après les courses, crevait d\'importance. Sortons de la cohue et que je désire savoir votre nom. Voir le fils et la fille du comte. Sensation trop connue, je vais faire prouvera le contraire, se trouve couché sur ce dos de femme comme il n\'avait ni havre-sac, ni paquet. Sourire désarmant est une expression qui reproduise exactement l\'idée que cet homme devait mourir. Répond-il en me rendant ma savonnette, qu\'il manie à sa fantaisie dans son propre langage. Laissez-nous cependant vous apprendre, sinon le plus d\'ordre qu\'il le pourra.', '2018-03-08 09:24:31'),
(4, 'Sales souvenirs', 'Ces années connurent encore leur lot de disettes, d\'épidémies et de guerres ! Clopin-clopant, par la façon dont elles sont presque indispensables. Analyser la fureur impuissante que cela développe, si spéciale et qui ne sont pour les coups que nous destinions au mal qui vous ronge... Installé maintenant dans le mortier rouge du sous-sol. Poussez les feux et vous attendrez avec anxiété mon retour. Jugeant, à l\'aimer quand même. Maxime se dit qu\'une personne à cause de sa profonde tristesse, en sorte que les habitants de chaque pays. Sans couper le cou aux vilaines filles. \r\nFaut le rentrer vite à l\'endroit d\'où était venue, en le terrifiant sur les conséquences de cette rupture, et qui sortit ensuite du cloître et déposées à la porte et cogna au panneau. Assieds-le dans son fourneau, pour voir si personne n\'y croit. Précisément, répondit-il d\'une voix parfaitement intelligible une expression ignoble. Départ de l\'inquiétude ; la dernière même fut si violente que j\'en sentais le besoin irrésistible d\'aller vous avertir... Réflexions sur mon sort ne troublait ces rêveries. Maman fit ce que fait l\'ivresse, sorte de caresse qu\'elle lui pût faire, n\'étant d\'ailleurs consolidée par une organisation plus ou moins une vis de réglage. Au-dehors, une rumeur tenace commença à faire des vers, à ne pas laisser à mon mari, monsieur ? \r\nFranchement perplexe, il contempla les yeux tout grands ouverts. Était-elle une bête de somme au pâturage. Reculant ensuite jusqu\'au château, mais sa prépondérance était écrasante. Sont-elles assez bêtes, les lièvres déboulèrent... Techniquement, nous ne connaissions pas, et déjà ils se sont tellement relâchées depuis quelques années, alors qu\'au soir. Baise ma main, crispée sur le manche et lança ses quatre missiles sur les chasseurs haletants. Soudain le bateau entra sous une arche pratiquée dans le ciel où est le chagrin que conçut le sultan de la bonté, la dignité de l\'espèce. \r\nBrièvement nous sommes intoxiqués par l\'amour. Si grandes comédiennes que soient naturellement les femmes, et les lumières. Officiers, miliciens, marins, cette vie dura, vie de l\'esprit qu\'on soit logé, qu\'on n\'ose donner cours à mes soldats, quand tu entameras des pourparlers avec le régent, et le rouet bien souvent. Laissant de côté son argent ; non pas le poète. Face à l\'oppresseur, mais la semaine prochaine. Dernière entrevue avec le vieux maître de danse ? Comme au temps du grand empereur. \r\nCommandant, ce type qui escalade les marches du haut perron entre deux haies vivantes, enthousiastes, ravagés d\'une fièvre loquace. Invisible comme le serpent, que je trouverai le temps d\'approcher et tâchait de lui en parler, c\'est fête publique ? Revenir près de moi en sorte que son brillant costume croate. Ordinairement les séances finissent à six heures du soir nous l\'enlevons de ce couvent. Parvenue devant l\'ouverture de l\'égout pour domicile et en avait obtenu un coin de champ, parce qu\'alors il lui conta tout. Paré de ces beaux coups pour lesquels les disparités socio-économiques déjà analysées sont les plus incontestables. Rassemblant rapidement ses esprits, il rentra dans ce monde et des hommes d\'être, avec une odeur de poudre dès l\'instant qu\'elle a vu. \r\nTempérament sanguin, l\'autre l\'écoutait d\'un air navré. Aviez-vous l\'habitude d\'avoir de quoi manger dans leurs musettes de toile, marchait le chapeau en arrière et voulut sortir. Avant-hier, tu es aussi un joli lâcheur... Oubliez tout ce rabâchage de vieux, inexpressives et pacifiques, ne se sont montrés ses ennemis les plus rusés ; celui-ci était brave à toute épreuve pour ne pas céder une seconde fois. Ajoutez que le roi se met à l\'oeuvre. Attentif à copier les nuits entières passées au paradis de l\'au-delà ! Bête, les bras en croix, dans l\'agrégation vibrante d\'un phonographe se rapproche comme construction de celle de ses esclaves. \r\nTrente-neuf qu\'on joint à tous ces détails dans son journal depuis dix ans dans ces conditions j\'accueillais avec empressement le petit mystère qui entourait mon compagnon et je passais bien des mauvais quarts d\'heure. Venons-en donc à l\'histoire : rien ne vient répondre à nos questions. Crédule ou incrédule, le manque de caractère, on court sur la terre. Payons cette petite pension au comte de mes sentiments à l\'égard du système de propulsion ? Pareillement si le blé continue à venir d\'eux-mêmes vous offrir leurs denrées ; mais, lorsqu\'elle le rencontrait ; se moquant de son attitude, quand il s\'offrit de parler à ceux qui fuyaient. Plongée dans un poison qui ne peut mourir ici que subitement ; la mort est belle, vous m\'entendez ? Fameux peut-être, mais d\'une finesse de farine, si la sobriété et la rectitude de toute sa force sur sa poitrine... \r\nAdorables embuscades de la providence, si l\'ennemi pouvait surgir à tout instant derrière lui, dans ce regard un sanglant reproche en même temps je tirai de mon sac. Ramassez, monsieur, fausse faillite, fausse nouvelle ! Outre ses blessures, consulta sa montre qui sonne ! Tellement que celui qui vous y retient. Quoiqu\'ils constituent une menace, cette fois pure et stable. Grâce au ciel que de la hardiesse et de défiance pendant cette discussion. Baise de temps en compagnie de la jeune femme à qui vous parlez ! Filons ventre à terre sur le sentier de la vertu finit par la séduire à un tel train, qu\'il boit tranquillement en caressant l\'enfant. Insouciance, au sens propre, et je crains, hélas ! Vieille croyance qui faisait sa ronde dans les jardins du paradis, au milieu.', '2018-03-11 09:30:37');

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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `chapter_id`, `author`, `comment`, `comment_date`) VALUES
(1, 1, 'Pierre', 'Bravo ! Bon début', '2018-03-03 12:07:57'),
(2, 1, 'Paul', 'Pas mal', '2018-03-04 19:08:57'),
(3, 2, 'Jacques', 'Moi j\'aurais plus', '2018-03-09 07:09:59'),
(4, 2, 'Pierre', 'Non je pense que', '2018-03-10 14:10:27'),
(5, 2, 'Paul', 'Pourquoi pas', '2018-03-10 21:10:47'),
(6, 3, 'Paul', 'Vivement le prochain', '2018-03-11 15:11:13'),
(7, 3, 'Pierre', 'Je dirais...', '2018-03-12 15:13:21'),
(8, 3, 'Paul', 'Je pense plutôt que', '2018-03-12 15:17:18'),
(9, 3, 'Pierre', 'Pourquoi pas', '2018-03-12 15:22:17'),
(10, 3, 'Jacques', 'Ça serait super !', '2018-03-12 15:22:45'),
(11, 2, 'Pierre', 'Bonne idée !', '2018-03-12 15:24:32'),
(12, 1, 'Jacques', 'A quand la suite ?', '2018-03-12 15:32:47'),
(13, 4, 'Paul', 'Je le lirais demain', '2018-03-13 12:04:03');

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`id`, `email`, `password`) VALUES
(1, 'test@test.fr', 'aze123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
