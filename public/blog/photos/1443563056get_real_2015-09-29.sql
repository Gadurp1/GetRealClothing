# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.5.42)
# Database: get_real
# Generation Time: 2015-09-29 16:06:41 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table tb_blogs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tb_blogs`;

CREATE TABLE `tb_blogs` (
  `blogID` int(11) NOT NULL AUTO_INCREMENT,
  `CatID` int(6) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `content` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` date NOT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `status` enum('publish','unpublish','draft') DEFAULT 'draft',
  `video_url` varchar(250) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `entryby` int(11) DEFAULT NULL,
  PRIMARY KEY (`blogID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `tb_blogs` WRITE;
/*!40000 ALTER TABLE `tb_blogs` DISABLE KEYS */;

INSERT INTO `tb_blogs` (`blogID`, `CatID`, `title`, `slug`, `content`, `created_at`, `updated_at`, `tags`, `status`, `video_url`, `image`, `entryby`)
VALUES
	(1,NULL,'4th Annual Get Real Stoopid Contest','4th-Annual-Get-Real-Stoopid-Contest','<p>The fourth annual stoop contest fell on May 15th 2015. Despite it being the most violent weekend of the year to date in Chicago, we had Pilsen rockin’ with tunes, beer, food, and of course some awesome skating without anybody getting hurt (or any of our shit stolen). At 4:20, our buddy Luke Westnedge  rolled through with the Red Bull Cate truck and provided the music while Jake Linden manned the megaphone and held down the madness. As the contest finished up, the police came by as usual and apparently wanted to shut the whole thing down, so we had to finish up quickly and push everyone into the courtyard to announce the results.\n</p><p>Steezy Sean Cullen took first this year with the back tail big-spin with extra style.\nSecond place was the homie Tim (sorry, I don’t know his last name) with a barrage of fast tricks. Finally, third place was Josh Ferro with his solid bag tricks that you would need two hands to count! Following the results and the Beerboyz style product toss, everyone piled into the park across the street to watch a few rippers skate the 11 stair. Again, Sean Cullen came out guns-a-blazin’ with a never before done back smith on the rail. Other tricks included Darnell Lash with a backside boardslide, Julian Izaguirre with a backside 5-0, and Tre hit em’ with a backside 180 down the set onto the plywood! You can’t forget Jody’s kickflip stick numerous times either; beerboyz never die!\n	</p><p>The overall moral of the day was that all of our friends and local skateshops came together and had a blast and did something good for our community, even despite the knuckleheads who are out there hurting and killing people. Jimi Hendrix once said “When the power of love overcomes the love of power, the world will find peace.” In our case the power of love took over everything that day! Huge thank you to Uprise Skateshop, Modest Skateshop, Prosper, Character, Compadre, Red Bull Cate, and most of all every one of you who came out and had the most kick ass time ever. Get Real.</p>\n       ',NULL,'0000-00-00',NULL,'publish','https://www.youtube.com/embed/We39jZk8qzU','IMG_0237.jpg',NULL);

/*!40000 ALTER TABLE `tb_blogs` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tb_blogcategories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tb_blogcategories`;

CREATE TABLE `tb_blogcategories` (
  `CatID` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `alias` varchar(100) DEFAULT NULL,
  `enable` enum('0','1') DEFAULT NULL,
  PRIMARY KEY (`CatID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `tb_blogcategories` WRITE;
/*!40000 ALTER TABLE `tb_blogcategories` DISABLE KEYS */;

INSERT INTO `tb_blogcategories` (`CatID`, `name`, `alias`, `enable`)
VALUES
	(1,'Skateboarding','news','1'),
	(2,'Music','industry-news','1'),
	(3,'Events','litigation-updates','1');

/*!40000 ALTER TABLE `tb_blogcategories` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
