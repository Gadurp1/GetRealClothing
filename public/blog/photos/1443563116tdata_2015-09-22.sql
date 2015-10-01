# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 192.168.0.16 (MySQL 5.1.37-log)
# Database: tdata
# Generation Time: 2015-09-22 14:52:20 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table rep_checks
# ------------------------------------------------------------

DROP VIEW IF EXISTS `rep_checks`;

CREATE TABLE `rep_checks` (
   `Client_ID` INT(11) NULL DEFAULT NULL,
   `Case_ID` INT(11) NULL DEFAULT NULL,
   `ID` INT(11) NOT NULL DEFAULT '0',
   `Claim_ID` INT(11) NULL DEFAULT NULL,
   `Number` VARCHAR(255) NULL DEFAULT NULL,
   `Date` DATE NULL DEFAULT NULL,
   `Amount` DECIMAL(19) NULL DEFAULT NULL,
   `Status` VARCHAR(10) NULL DEFAULT NULL
) ENGINE=MyISAM;





# Replace placeholder table for rep_checks with correct view syntax
# ------------------------------------------------------------

DROP TABLE `rep_checks`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `rep_checks` AS (select `claims`.`Client_ID` AS `Client_ID`,`claims`.`Case_ID` AS `Case_ID`,`checks`.`ID` AS `ID`,`checks`.`Claim_ID` AS `Claim_ID`,`checks`.`Number` AS `Number`,`checks`.`Date` AS `Date`,`checks`.`Amount` AS `Amount`,(case when ((`checks`.`Status` = 'requesting') and ((`rb`.`payee` = 'needed') or (`rb`.`address1` = 'needed') or (`rb`.`city` = 'needed') or (`rb`.`state` = 'needed') or (`rb`.`zip` = 'needed'))) then 'Requesting' when ((`checks`.`Status` = 'requesting') and (`rb`.`payee` = 'On Record') and (`rb`.`address1` = 'On Record') and (`rb`.`city` = 'On Record') and (`rb`.`state` = 'On Record') and (`rb`.`zip` = 'On Record')) then 'Processing' when (`checks`.`Status` = 'Wired') then 'Wired' when (`checks`.`Status` = 'Mailed') then 'Mailed' when (`checks`.`Status` = 'Processing') then 'Processing' when (`checks`.`Status` = 'Allocation') then 'Allocation' else 'Pending' end) AS `Status` from (((`checks` join `claims` on((`checks`.`Claim_ID` = `claims`.`ID`))) join `clients` on((`claims`.`Client_ID` = `clients`.`ID`))) left join `rep_boi_checks` `rb` on(((`rb`.`client_id` = `claims`.`Client_ID`) and (`rb`.`claim_id` = `checks`.`Claim_ID`) and (`rb`.`subclient` = `checks`.`Number`)))));

/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
