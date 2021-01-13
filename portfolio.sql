-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mer. 13 jan. 2021 à 09:28
-- Version du serveur :  5.7.30
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données : `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `competences`
--

CREATE TABLE `competences` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(510) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `competences`
--

INSERT INTO `competences` (`id`, `title`, `content`, `icon`) VALUES
(1, 'WebDesign', 'Création de maquette XD et HTML, ainsi que de prototypes fonctionnels. Conception centrée utilisateurs selon les règles d\'UX lors de la création d\'une interface utilisateur.', '<i class=\"fas fa-laptop mr-3\"></i>'),
(2, 'Front-End', 'Création est intégration de sites web et applications mobiles responsive, accessibles et répondant aux normes W3C, avec Bootstrap, CSS/SASS et Javascrypt/JQuery.', '<i class=\"fas fa-code mr-3\"></i>'),
(3, 'Back-End', 'Développement de sites web via php/symfony, création et gestion de bases de données avec SQL, programmation orientée objet, mise en ligne.', '<i class=\"fas fa-database mr-3\"></i>'),
(4, 'Référencement', 'En apprentissage du développements favorisant le référencement naturel et des \"best practice\" afin d\'avoir une place confortable sur les moteurs de recherche.', '<i class=\"fas fa-search mr-3\"></i>'),
(5, 'CMS', 'En apprentissage pour la création et l\'édition de thèmes et plugins. \r\nMon expérience est principalement portée sur WordPress.', '<i class=\"fas fa-paint-brush mr-3\"></i>'),
(6, 'Gestion de projet', 'Réalisation d\'UML / MCD / MLD.\r\nApprentissage pour la rédaction d\'un cahier des charges, connaissance de la méthode SCRUM : Agile.', '<i class=\"fas fa-cogs mr-3\"></i>');

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20201223134649', '2020-12-23 13:47:20', 163),
('DoctrineMigrations\\Version20210102144135', '2021-01-02 14:41:49', 103),
('DoctrineMigrations\\Version20210107232343', '2021-01-07 23:24:51', 195);

-- --------------------------------------------------------

--
-- Structure de la table `sites`
--

CREATE TABLE `sites` (
  `id` int(11) NOT NULL,
  `tech` varchar(510) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sites`
--

INSERT INTO `sites` (`id`, `tech`, `content`, `link`, `title`, `img`) VALUES
(1, '<i class=\"fab fa-html5\"></i><i class=\"fab fa-css3-alt\"></i><i class=\"fab fa-php\"></i>', '<ul>\r\n<li>TP en PHP pour réaliser un lanceur de dés</li>\r\n<li>Création d\'un formulaire pour choisir le nombre de face ainsi que le nombre de lancé</li>\r\n<li>Création d\'un algorithme pour calculer et afficher le résultat</li>\r\n</ul>', '#', 'Jeux de dès', 'dice-5ff783cd50b12.jpg'),
(2, '<i class=\"fab fa-html5\"></i><i class=\"fab fa-sass\"></i><i class=\"fab fa-bootstrap\"></i><i class=\"fab fa-js\"></i>', '<ul>\r\n<li>Analyse d\'une maquette</li>\r\n<li>Intégration avec le respect des normes HTML/CSS</li>\r\n<li>Mise en place d\'une Bar de navigation dynamique en JS</li> \r\n</ul>', 'https://andreani-quentin.github.io/TP-Maquette/', 'Le Grand Restaurant', 'Capture-d-ecran-2021-01-07-a-23-30-13-5ff78d7f53241.png'),
(3, '<i class=\"fab fa-html5\"></i><i class=\"fab fa-css3-alt\"></i><i class=\"fab fa-bootstrap\"></i>', '<ul>\r\n<li>Premier TP Bootstrap, analyse d\'une maquette à reproduire avec une liberté pour le thème</li>\r\n<li>Intégration de la maquette avec Bootstrap</li>\r\n</ul>', 'https://andreani-quentin.github.io/Projet-Arinfo-First_Integration/', 'Stark Industries', 'Capture-d-ecran-2021-01-13-a-09-56-18-5ffeb8105fe0a.png'),
(4, '<i class=\"fab fa-html5\"></i><i class=\"fab fa-css3-alt\"></i><i class=\"fab fa-bootstrap\"></i>', '<ul>\r\n<li>Tp réalisation d\'un blog avec liberté du thème</li>\r\n<li>Utilisation de bootstrap</li>\r\n</ul>', 'https://andreani-quentin.github.io/Projet-Space/', 'Space - Blog', 'Capture-d-ecran-2021-01-13-a-10-18-26-5ffebc815d6d8.png');

-- --------------------------------------------------------

--
-- Structure de la table `timeline`
--

CREATE TABLE `timeline` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `dates` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `timeline`
--

INSERT INTO `timeline` (`id`, `title`, `content`, `dates`) VALUES
(1, 'Collège Quéral', 'Diplôme national du brevet des collèges </br> Formation et enseignement au collège', '2005 – 2009'),
(2, 'Lycée des Trois Rivières (44)', 'CAP Conduite de Systèmes Industriels </br> \r\nTechnologie industrielle / technicien industriel </br>\r\nMention Assez Bien', '2009 – 2011'),
(3, 'Lycée des Trois Rivières de Pontchâteau (44)', 'Bac Professionnel Pilotage de Systèmes de Production Automatisée </br>\r\nTechnologie industrielle / technicien industriel </br>\r\nMention Assez Bien', '2011 - 2012'),
(4, 'IAE - Université de Nantes', 'Première année de licence d\'économie et de gestion', '2012 - 2013'),
(5, 'McDonald\'s, Équipier Polyvalent', 'Pontchâteau, Pays de la Loire, France </br> </br>\r\nÉquipier Polyvalent</br>\r\n- Service Client, préparation de commande, respect des process</br>\r\n- Nettoyage et maintien des équipements</br>', 'sept. 2014 – juin 2015 : 10 mois'),
(7, 'McDonald\'s, Chef d\'Équipe', 'Pontchâteau, Pays de la Loire, France</br></br>\r\nChef d\'Équipe</br>\r\n- Gestion des équipes en l\'absence du Manager, respect des process, respect des consignes de sécurité et respect des normes HACCP</br>\r\n- Service Client et Production</br>\r\n- Formation des équipes</br>', 'juil. 2015 – oct. 2015 : 4 mois'),
(8, 'McDonald\'s, Manager - Assistant de Direction', 'Savenay, Pays de la Loire, France / Trignac, Pays de la Loire, France </br> </br>\r\n\r\nManager - Assistant de Direction </br>\r\n- Assurer la responsabilité et le bon fonctionnement du Restaurant lors de la prise de shift. </br>\r\n- Formation au siège de McDonald’s France et validation du TBM1 et du TBM2 (Technique de Base du Management). </br>\r\n- Gérer et diriger le personnel (Jusqu’à 50 Équipiers et Chefs d’Équipes sur le terrain) </br>\r\n- Assurer la fluidité de production et de service. </br>\r\n- Gérer les plans de formation des Formateurs/Chefs d’Équipes. </br>\r\n- Gestion des risques HACCP (Sécurité Alimentaire et application en Restaurant auprès des équipes) </br>\r\n- Gestion et approvisionnement des Stocks (Inventaire tous les mois et calculs d’écarts statistiques) </br>', 'nov. 2015 – déc. 2018 : 3 ans et 2 mois'),
(9, 'Tablapizza, Responsable de Salle', 'Saint-Nazaire, Pays de la Loire, France </br> </br>\r\n\r\nResponsable de Salle </br>\r\n- Gérer les activités de la salle ainsi que la bonne fluidité du service et assurer la responsabilité du restaurant. </br>\r\n- Répondre adéquatement aux besoins des clients (Accueillir, placer les clients, gérer les réservations, servir)</br>\r\n- Gestion et formation du personnel.</br>', 'févr. 2019 - août 2019 : 7 mois'),
(10, 'Equivalenza, Responsable de magasin', 'Pontchâteau, Pays de la Loire, France</br></br>\r\n\r\nResponsable de magasin</br>\r\n- Assurer le bon fonctionnement du magasin (Gérer le réapprovisionnement, rangement et classification des produits, inventaires)</br>\r\n- Gestion, formation du personnel et du planning.</br>\r\n- Rédaction de documentations : modes opératoires, procédures, documentations clients.</br>\r\n- Gestion de la clientèle (Accueillir, conseiller, accompagner)</br>', 'octo. 2019 - févr. 2020 : 5 mois'),
(11, '42, Piscine de l\'école 42', 'Paris </br></br>\r\n\r\nPiscine (Immersion pendant 1 mois) :</br>\r\n- Apprentissage Utilisation Shell Unix</br>\r\n- Apprentissage Utilisation Git et GitHub</br>\r\n- Apprentissage du C :</br>\r\n- Déclaration de variable / Types des variables / Conversion\r\nde types / Déclaration des tableaux / Opérateurs /\r\nStructures conditionnelles et itératives / Sous-programmes\r\n/ Chaînes de caractères / Pointeurs / Préprocesseur /\r\nPointeurs de fonctions / Retour d\'une valeur / Gestion des\r\nerreurs / Appels système / Paramètres d\'une commande C', 'août. 2019 – sept. 2019 : 1 mois'),
(12, 'Centre de formation professionnelle Arinfo', 'Saint-Nazaire, Pays de la Loire, France</br></br>\r\n\r\nTitre Professionnel RNCP Développeur web et web mobile / Analyste Programmeur</br></br>\r\n\r\n• CCP 1 : Développer partie front-end </br></br>\r\n\r\n- Maqueter une application</br>\r\n- Réaliser une interface utilisateur web statique et adaptable</br>\r\n- Développer une interface utilisateur web dynamique</br>\r\n- Réaliser une interface utilisateur avec une solution de gestion de contenu ou e-commerce</br></br>\r\n\r\n• CCP 2 : Développer partie back-end</br></br>\r\n\r\n- Créer une base de données</br>\r\n- Développer les composants d’accès aux données,</br>\r\n- Développer la partie back-end d’une applicaIon web ou web mobile</br>\r\n- Élaborer et mettre en œuvre des composants dans une application de gestion de contenu ou e-commerce', 'octo. 2020 - mars. 2021 : 6 mois');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`) VALUES
(1, 'q.andreani@gmail.com', '[]', '$argon2id$v=19$m=65536,t=4,p=1$wkLvpmocV4nmJNyNOoUtfw$c0UR4umF/yyi6Yax5vBkeAYZIBi+c7VJZCzUiNfRJXs');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `competences`
--
ALTER TABLE `competences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `sites`
--
ALTER TABLE `sites`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `timeline`
--
ALTER TABLE `timeline`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `competences`
--
ALTER TABLE `competences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `sites`
--
ALTER TABLE `sites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `timeline`
--
ALTER TABLE `timeline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;