/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.1.32-MariaDB : Database - kinky_dos
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`kinky_dos` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `kinky_dos`;

/*Table structure for table `atracciones` */

DROP TABLE IF EXISTS `atracciones`;

CREATE TABLE `atracciones` (
  `id` int(10) unsigned NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `clasificacion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `clasificacion_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `atracciones_clasificacion_id_foreign` (`clasificacion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `atracciones` */

insert  into `atracciones`(`id`,`nombre`,`clasificacion`,`clasificacion_id`,`created_at`,`updated_at`,`slug`) values (1,'Alberca','Alberca-Tobogán',1,'2016-09-20 00:00:00',NULL,'alberca'),(2,'Camastro Gigante','Alberca-Tobogán',1,'2016-09-20 00:00:00',NULL,'camastro-gigante'),(3,'Cueva','Alberca-Tobogán',1,'2016-09-20 00:00:00',NULL,'cueva'),(4,'Solarium','Alberca-Tobogán',1,'2016-09-20 00:00:00',NULL,'solarium'),(5,'Potro del Amor','Potro del Amor',2,'2016-09-20 00:00:00','2017-05-16 11:18:53','potro-del-amor'),(6,'Potro Árabe','Potro del Amor',2,'2016-09-20 00:00:00',NULL,'potro-arabe'),(7,'Potro Colgante','Potro del Amor',2,'2016-09-20 00:00:00',NULL,'potro-colgante'),(9,'Potro en Niveles','Potro del Amor',2,'2016-09-20 00:00:00',NULL,'potro-en-niveles'),(10,'Rampa Tántrica','Potro del Amor',2,'2016-09-20 00:00:00',NULL,'rampa-tantrica'),(11,'Love Seat','Potro del Amor',2,'2016-09-20 00:00:00',NULL,'love-seat'),(12,'Cóncavo y Convexo','Potro del Amor',2,'2016-09-20 00:00:00',NULL,'concavo-y-convexo'),(13,'Tubo - Pole Dance','Pole Dance',3,'2016-09-20 00:00:00',NULL,'tubo'),(14,'Esfera de Luces','Pole Dance',3,'2016-09-20 00:00:00',NULL,'esfera-de-luces'),(15,'Palo de Lluvia','Pole Dance',3,'2016-09-20 00:00:00',NULL,'palo-de-lluvia'),(16,'Herrón','Pole Dance',3,'2016-09-20 00:00:00',NULL,'herron'),(17,'Table Dance','Pole Dance',3,'2016-09-20 00:00:00',NULL,'table-dance');

/*Table structure for table `blog` */

DROP TABLE IF EXISTS `blog`;

CREATE TABLE `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `blog` */

insert  into `blog`(`id`,`titulo`,`img`,`created_at`,`updated_at`) values (1,'Así puedes aprovechar Hoteles Kinky durante la cuar...','fondo1.png','2020-11-18 20:24:47','2020-11-12 06:00:00'),(2,'Así puedes aprovechar Hoteles Kinky durante la cuar...','fondo2.png','2020-11-18 20:24:55','2020-11-12 06:00:00');

/*Table structure for table `clasificaciones` */

DROP TABLE IF EXISTS `clasificaciones`;

CREATE TABLE `clasificaciones` (
  `id` int(10) unsigned NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8_unicode_ci,
  `orden` int(12) DEFAULT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `clasificaciones` */

insert  into `clasificaciones`(`id`,`nombre`,`descripcion`,`orden`,`imagen`,`created_at`,`updated_at`,`slug`) values (2,'Potro del Amor','En esta Atracción puedes realizar más de 30 posiciones y, lo mejor de todo, es que  hay de diferentes tipos: árabe, en niveles, colgante… Y en otras versiones, como la Rampa Tántrica, el  Love Seat y el Cóncavo y Convexo.',3,'img3.png',NULL,'2017-05-04 16:17:19','potro-del-amor'),(4,'Rincón del Sacrificio','Estos rincones de los LoveHotels son perfectos para cumplir fantasías BDSM.  Con el Rincón del Sacrificio o el Rincón Fetish te aseguramos una experiencia llena de erotismo y  complicidad en pareja.',1,'img1.png',NULL,'2017-05-04 16:17:52','rincon-del-sacrificio'),(5,'Bondage','¡Cumple tus deseos más ocultos! Deja salir las prácticas de dominación/sumisión que llevas  dentro con ayuda de estas Atracciones: Escenario Bondage, Escalera del Amor, Arco de Posiciones,  Columpio Fetish, Jaula y Calabozo.',2,'img2.png',NULL,'2017-05-04 16:18:10','bondage');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
