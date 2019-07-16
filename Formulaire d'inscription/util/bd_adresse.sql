SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `bd_adresse`
--

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

CREATE TABLE IF NOT EXISTS `adresse` (
	`id` INT(20) NOT NULL,
	`prefixe` VARCHAR(3) NOT NULL,
	`nom` VARCHAR(50) NOT NULL,
	`prenom` VARCHAR(50) NOT NULL,
	`adresse1` VARCHAR(100) NOT NULL,
	`adresse2` VARCHAR(100) DEFAULT NULL,
	`cp` VARCHAR(5) NOT NULL,
	`ville` VARCHAR(50) NOT NULL,
	`pays` VARCHAR(50) NOT NULL,
	`numTel` VARCHAR(10) NOT NULL,
	PRIMARY KEY(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Les données sont fictives

INSERT INTO `adresse` (`id`, `prefixe`, `nom`, `prenom`, `adresse1`, `adresse2`, `cp`, `ville`, `pays`, `numTel`) VALUES
(1, 'M', 'DUPUIS', 'Jack', '100 boulevard Pantin', null, '92012', 'Boulogne Billancourt', 'France', '0600000000'),
(2, 'Mme', 'FERREIRA', 'Adrianna', '182 rue d\'Alésia', null, '75014', 'Paris', 'France', '0600000000'),
(3, 'M', 'ALMEIDA', 'Filippe', '99 quai aux fleurs', null, '75004', 'Paris', 'France', '0600000000'),
(4, 'Mme', 'DUPONT', 'Isabelle', '78 rue de la bastille', null, '75004', 'Paris', 'France', '0600000000'),
(5, 'M', 'LEGRAND', 'Thomas', '10 rue Saint-Denis', null, '93100', 'Montreuil', 'France', '0600000000'),
(6, 'Mme', 'MARTIN', 'Juliette', '1 rue de L\'Ouest', null, '75014', 'Paris', 'France', '0600000000'),
(7, 'M', 'MARTIN', 'Oscar', '3 rue de l\'Egalité', null, '92000', 'Nanterre', 'France', '0600000000'),
(8, 'Mme', 'DUBOIS', 'Satou', '7 avenue Pablo Picasso', null, '92000', 'Nanterre', 'France', '0600000000'),
(9, 'M', 'ROUSSEAU', 'David', '100 rue de Mitry', null, '77290', 'Compans', 'France', '0600000000'),
(10, 'Mme', 'DENIS', 'Cloé', '3 rue Ambourget', null, '93600', 'Aulnay-Sous-Bois', 'France', '0600000000'),
(11, 'M', 'ROBIN', 'Robert', '1 rue des Carreaux', null, '95110', 'Sannois', 'France', '0600000000'),
(12, 'Mme', 'BOYER', 'Laura', '3 rue de Plan', null, '78700', 'Conflans-Sainte-Honorine', 'France', '0600000000'),
(13, 'M', 'LEROY', 'André', '40 avenue de la Gare', null, '95220', 'Herblay', 'France', '0600000000'),
(14, 'Mme', 'ROUX', 'Audré', '14 rue Désiré Letulle', null, '95300', 'Ennery', 'France','0600000000');

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

CREATE TABLE IF NOT EXISTS `compte` (
	`id` INT(20) NOT NULL,
	`nom` VARCHAR(50) NOT NULL,
	`prenom` VARCHAR(50) NOT NULL,
	`mail` VARCHAR(50) NOT NULL,
	`mdp` VARCHAR(50) NOT NULL,
	PRIMARY KEY(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `compte` (`id`, `nom`, `prenom`, `mail`, `mdp`) VALUES
(1, 'ALMEIDA', 'Garry', 'gary.almeida.work@gmail.com', 'LxbSG@!41X8a'),
(2, 'Admin', 'Admin', 'gary@gmail.com', 'compteSecours');