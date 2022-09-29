-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 25 juin 2021 à 10:02
-- Version du serveur :  5.6.17-log
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `testowasp`
--
CREATE DATABASE IF NOT EXISTS `testowasp` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `testowasp`;

-- --------------------------------------------------------

--
-- Structure de la table `article1`
--

DROP TABLE IF EXISTS `article1`;
CREATE TABLE IF NOT EXISTS `article1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) NOT NULL,
  `libel` text NOT NULL,
  `img` varchar(50) NOT NULL,
  `categorie` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_categ` (`categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article1`
--

INSERT INTO `article1` (`id`, `titre`, `libel`, `img`, `categorie`) VALUES
(3, 'Combinaison de Plongée', 'Le vêtement étanche ou combinaison de plongée sèche, est une combinaison monopièce intégrale réalisée en néoprène, qui empêche complétement l\'eau de s\'infiltrer. Le néoprène peut être compressé ou en tissu enduit. Les chaussons sont attenants à la combinaison. De plus, l\'étancheité est assurée par des manchons en néoprène ou en latex au niveau du cou et des poignets, et par une fermeture étanche.\r\nCelle-ci est plus souvent située dans le dos, d\'épaule à épaule; parfois elle est en U sur le devant. Cette combinaison étanche est parfaite pour une utilisation en eaux froides et profondes, et peut être complétée par des sous-vêtements thermiques proposés pas nos soins. Attention, cette combinaison comporte un inflateur ainsi qu\'un bouton de purge, un petit apprentissage est nécessaire. N\'hèsitez pas à nous contacter pour de plus amples informations. ', 'combinaison-plongee.jpg', 2),
(4, 'Masque de Plongée', 'Le masque de plongée permet évidement de voir sous l\'eau mais aussi de compenser (pincer le nez lors de la descente). Il doit donc être adapté à la forme du visage, permettre un accès facile au nez et être confortable ! Avec une ou deux vitres (monovere oubi-verre), en silicone extra doux, il est un des premiers achat du plongeur. Il existe aussi la possibilité de disposer de masque a verres correcteurs afin d\'ameliorer le confort des plongées. Avant la vente, chaque masque est nettoyé individuellement pour éviter la buée. Plongée loisir, plongée technique, randonnée palmée ou snorkeling, tous les masques de plongée dont vous avez besoin sont ici. ', 'masque.jpg', 2),
(5, 'Planche de surf Tesla', 'Conçu par le Tesla Design Studio en collaboration avec Lost Surfboards et Matt « Mayhem » Biolos, shaper de planche de surf pour les athlètes du World Surf League Championship. La planche de surf Tesla en édition limitée comprend un mélange des mêmes finis mates et brillants de haute qualité utilisés sur toutes nos voitures. Le pont est renforcé avec de la fibre de carbone « Black Dart » légère, inspirée par l’intérieur de nos voitures, et avec des logos ton sur ton dans un subtil contraste de brillance.', 'surftesla.jpg', 1),
(6, 'Combinaison de surf', 'Le Top Néoprène Quiksilver Syncro Jacket est un top manches courtes sans Zip.\r\n\r\nCe Top néoprène Syncro offre les mêmes caractéristiques de construction que la combinaison du même nom. Avec ses 1mm d\'épaisseur, il sera parfait pour les sessions estivales et printanières ou bien sous une combinaison intégrale en hiver pour un apport supplémentaire de chaleur.\r\n\r\nLe Néoprène 100% StretchFlight x2 vous apportera chaleur, légéreté et flexibilité et les coutures Coil B-Lock confort et stretch.', 'combisurf.jpg', 1),
(7, 'Voile de Kite', 'La Naish Dash LE (édition limitée) S26 est une aile de freestyle / Big Air. Elle se destine aux riders ayant un niveau avancé. C\'est une aile idéale pour les kiteloops et pour déhooker. Le bridage sans poulie améliore le retour d\'informations. La plage haute est excellente.\r\n\r\nLes Conseils de la Team :\r\n- La majorité des ailes (hormis les C-shape) sont très polyvalentes avec un domaine de prédilection. Par exemple une aile vague sera performante à 100 % dans ce domaine et à 80 % en freeride, 80 % en freestyle,... Nous sommes désolés, mais vous pourrez difficilement accuser votre aile d\'être un frein à votre progression !\r\n- Pensez à ranger votre aile sèche, si vous ne pouvez pas le faire lors de votre session, il est important de s\'en occuper une fois rentré chez soi.\r\n- Evitez de laisser gonfler votre kite sur la plage. Le flappement du spi diminuera sa durée de vie. Prenez juste une photo pour instagram / facebook et ranger votre aile tout de suite après :-)', 'voilekite.jpg', 3),
(8, 'Planche de Kite', 'La Xcaliber carbon est faite pour le freestyle en compétition. Cette version carbone rend la board très réactive. Les nouveaux channels situés aux extrémités procurent un pop explosif sur le flat et vous permettront d\'utiliser les vagues pour vous satelliser. Le carbone utilisé donne à la board des performances optimales quand les conditions sont au rendez-vous. Cette construction offre permet d\'obtenir une planche légère avec une excellente rigidité. Le feeling est ainsi excellent.', 'planches-kitesurf.jpg', 3);

-- --------------------------------------------------------

--
-- Structure de la table `categorie_article`
--

DROP TABLE IF EXISTS `categorie_article`;
CREATE TABLE IF NOT EXISTS `categorie_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libel` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie_article`
--

INSERT INTO `categorie_article` (`id`, `libel`) VALUES
(1, 'Surf'),
(2, 'Plongée'),
(3, 'KiteSurf');

-- --------------------------------------------------------

--
-- Structure de la table `categorie_user`
--

DROP TABLE IF EXISTS `categorie_user`;
CREATE TABLE IF NOT EXISTS `categorie_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libel` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie_user`
--

INSERT INTO `categorie_user` (`id`, `libel`) VALUES
(1, 'Admin'),
(2, 'Comptable'),
(3, 'DRH');

-- --------------------------------------------------------

--
-- Structure de la table `forum`
--

DROP TABLE IF EXISTS `forum`;
CREATE TABLE IF NOT EXISTS `forum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(50) NOT NULL,
  `message` longtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2098 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `forum`
--

INSERT INTO `forum` (`id`, `mail`, `message`, `date`) VALUES
(5, 'pfromeuf@gmail.com', 'bonjour', '2021-06-17 23:31:42'),
(6, 'pfromeuf@gmail.com', 'test test', '2021-06-17 23:34:35');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `mdp` varchar(50) CHARACTER SET utf32 NOT NULL,
  `mdpcryp` varchar(50) NOT NULL,
  `categorie` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `categorie` (`categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `login`, `mdp`, `mdpcryp`, `categorie`) VALUES
(1, 'aministrateur1', 'admin1', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'aministrateur2', 'admin2', 'P@ssw0rd', '161ebd7d45089b3446ee4e0d86dbcf92', 1),
(3, 'Assistant DRH', 'adrh1', 'drh', '147de4c9d38de7fc9029aafbf0cc25a1', 3),
(4, 'Comptable 1', 'compta1', 'compta', '3b3a542046e2770f4877af00ed182a9b', 2);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article1`
--
ALTER TABLE `article1`
  ADD CONSTRAINT `fk_categorie` FOREIGN KEY (`categorie`) REFERENCES `categorie_article` (`id`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_categuser` FOREIGN KEY (`categorie`) REFERENCES `categorie_user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
