-- MySQL dump 10.13  Distrib 5.7.29, for Linux (x86_64)
--
-- Host: localhost    Database: boomerphpmvc
-- ------------------------------------------------------
-- Server version	5.7.29-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `content` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,1,1,'I DON\'T KNOW THE SEASON OR WHAT IS THE REASON','2020-04-19 16:33:07'),(2,1,1,'I\'M STILL HERE HOLDING MY BLADE','2020-04-19 16:36:31'),(4,1,1,'STANDING HERE I  FEELIZE  YOU ARE JUST LIKE ME  TRYING TO MAKE alert(\'HISTORY\');','2020-04-19 16:48:00'),(5,1,1,'BUT WHO\'S TO JUDGE, THE RIGHT FROM WRONG?','2020-05-10 15:14:30'),(7,1,1,'TIME TO LEAVE THEM ALL BEHIIIIIIIIIIIND BREAKING OUT OF MY CHAINS IM MY OWN MASTER NOW','2020-05-10 15:20:58'),(12,1,1,'TIME TO LEAVE THEM ALL BEHIIIIIIIIIIIND BREAKING OUT OF MY CHAINS IM MY OWN MASTER NOW','2020-05-10 15:27:54'),(13,1,1,'TIME TO LEAVE THEM ALL BEHIIIIIIIIIIIND BREAKING OUT OF MY CHAINS IM MY OWN MASTER NOW','2020-05-10 15:28:53'),(14,2,4,'How about \"Full of sh*t\"? is that a meme ?','2020-05-14 14:39:57');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(1000) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,1,'COME ON JACK, LETS DANCE!','MEMORIES BROKEN\r\nTRUTH GOES UNSPOKEN\r\nI\'VE EVEN FORGOTTEN MY NAME','2020-04-16 21:24:28'),(2,2,'MEMES! THE DNA OF THE SOUL!','War is a cruel parent, but an effective teacher. Its final lesson is carved deep in my psyche: that this world, and all of its people, are diseased. Free will is a myth. Religion is a joke. We are all pawns, controlled by something greater: Memes, the DNA of the soul. They shape our will. They are the culture. They are everything we pass on. Expose someone to anger long enough, they will learn to hate. They become a carrier. Envy, greed, despair: all memes, all passed on. You can\'t fight nature, Jack. ','2020-05-14 14:37:21'),(3,3,'I WILL MAKE AMERICA GREAT AGAIN','I have a dream. That one day every person in this nation will control their own destiny. A nation of the truly free, dammit. A nation of action, not words, ruled by strength, not committee! Where the law changes to suit the individual, not the other way around. Where power and justice are back where they belong: in the hands of the people! Where every man is free to think - to act - for himself! F*** all these limp-dick lawyers and chickenshit bureaucrats. F*** this 24-hour Internet spew of trivia and celebrity bullshit! F*** American pride! F*** the media! F*** ALL OF IT! America is diseased. Rotten to the core. There\'s no saving it - we need to pull it out by the roots. Wipe the slate clean. BURN IT DOWN! And from the ashes, a new America will be born. Evolved, but untamed! The weak will be purged and the strongest will thrive - free to live as they see fit, they\'ll make America great again!.','2020-05-14 14:58:51');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `id` int(11) unsigned NOT NULL,
  `sessionId` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sessionId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES (1,'03d62e6a9d1a524d806c0f0e83d566e8d2abaf68','2020-05-10 14:57:21'),(3,'073702b532bef516c0dbafa6ce7050f19af30e0f','2020-05-14 14:16:35'),(2,'0ac7ffdf03c78e9b64b140bde8926f28ec3cd958','2020-04-29 20:18:16'),(1,'64ff468044b2d09581f81e02a08db4ac6b3eaffa','2020-05-11 14:04:51'),(4,'7168a6f3cd71a0060035e52e9949b37f876f8474','2020-05-14 14:08:07'),(3,'86fc2163625926860f227542915997c026910660','2020-05-14 14:40:57'),(1,'a195ebbef52cf3f434dcd6fe6755b5a812713bd2','2020-05-10 15:03:10'),(1,'af66b79f133ea3346283dec04b394b7f34e7b4ca','2020-04-10 15:15:21'),(1,'b0a6041b4aa803078f358d4a8c2c098fe1131dfe','2020-04-16 21:22:48'),(1,'b797f30f6d2b21299aa253be80687e6c51deef5a','2020-05-11 16:29:49'),(1,'c584f55802ab05f2af4de83ef0177be0bb3df3f8','2020-04-22 14:02:10'),(2,'c98175ec1366dfe6f7d3c9d21cb75d4f9ee95117','2020-05-14 14:32:30'),(4,'d041261ec4e2a8c188a709c0779967d22a9838c8','2020-05-14 14:38:45'),(2,'d3c1257c2595038183973278ed2b808a24007a38','2020-05-14 14:05:04'),(1,'d974b0570c7f9d4265f1129bf9e46be6830d9cbc','2020-04-19 16:02:32'),(1,'e935f63b7a4f45ece699b980fdf6901c566f193a','2020-05-12 13:53:11'),(1,'f71d0193dd703ad851d1b1b3cdc2ccfe4f23b349','2020-04-14 22:08:46');
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `about` varchar(1200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `registered_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'jetstreamsam','minuano@desperado-llc.com','123456','Samuel Rodriguez',NULL,NULL,'2020-04-10 12:07:06'),(2,'memesoon','monsoon@desperado-llc.com','123456','Monsoon','Free will is a myth, religion is a joke. We are all pawns controlled by something greater: MEMES, the DNA of the soul. They shape our will. They are the culture. They are everything we pass on. Expose someone to anger long enough, they will learn to hate. They become a carrier. Envy, greed, despair; all MEMES, all passed along.','Phnom Phenh, Cambodia','2020-04-29 20:16:27'),(3,'senator','senator@desperado-llc.com','123456','Steven Armstrong','The unenlightened masses\r\nThey cannot make the judgement call\r\nGive up free will forever their voices won\'t be heard at all\r\nDisplay obedience\r\nWhile never stepping out of line\r\nAnd blindly swear allegiance\r\nLet your country control your mind\r\nLive in ignorance\r\nAnd purchase your happiness\r\n\r\n','White House, Washington DC','2020-05-14 14:04:03'),(4,'sauccy_jacc','jack.raiden@maverick-security.com','123456','Jack Raiden','I said my sword was a tool of justice. Not used in anger. Not used for vengeance. But now......\r\nNow I\'m not so sure. And besides, this isn\'t my sword.','Denver, Colorado','2020-05-14 14:04:43');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-14 15:01:29
