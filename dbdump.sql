-- MySQL dump 10.13  Distrib 5.5.37, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: forum
-- ------------------------------------------------------
-- Server version	5.5.37-1

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
-- Current Database: `forum`
--

-- CREATE DATABASE /*!32312 IF NOT EXISTS*/ `forum` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `SF_S14`;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `comment_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `posted_by` mediumint(8) unsigned NOT NULL,
  `posted_on` datetime NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (2,38,38,'2014-06-26 22:45:29','Blah                            '),(3,27,38,'2014-06-26 22:47:17','Blah                            '),(4,27,38,'2014-06-26 23:09:20','And here\'s another comment'),(5,38,42,'2014-06-27 18:23:55','Hey, I\'m leaving you a comment.\r\nHopefully it handles wordwr'),(6,38,42,'2014-06-27 18:28:22','I\'ve now altered the text.  It should handle it much better now.  Let\'s see what it does instead of word wrap.'),(7,27,42,'2014-06-27 18:34:48','And here\'s Hally!                            '),(8,42,42,'2014-06-29 08:29:15','Hey bro!                            ');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forums`
--

DROP TABLE IF EXISTS `forums`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forums` (
  `forum_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `latest_thread` int(10) unsigned NOT NULL,
  `forum_subject` varchar(150) NOT NULL,
  PRIMARY KEY (`forum_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forums`
--

LOCK TABLES `forums` WRITE;
/*!40000 ALTER TABLE `forums` DISABLE KEYS */;
INSERT INTO `forums` VALUES (1,0,'Metal Discussion'),(2,0,'Recommendation Central'),(3,0,'For the Musicians'),(4,0,'Tours, Gigs and Festivals'),(5,0,'Promotional Forum'),(6,0,'Trading Board'),(7,0,'Selling and Buying Board'),(8,0,'The Forge'),(9,0,'Site Announcements'),(10,0,'Bug Reports, Suggestions and Feedback');
/*!40000 ALTER TABLE `forums` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `post_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `thread_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `message` text NOT NULL,
  `posted_on` datetime NOT NULL,
  `edited` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`post_id`),
  KEY `thread_id` (`thread_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,1,27,'This is an initial test post','2014-06-21 11:14:03',0),(2,2,27,'This album is the absolute shit!!!!!','2014-06-21 11:19:47',0),(3,1,27,'You\'re a bastard.','2014-06-21 15:06:06',0),(4,1,27,'You\'re also a visionary!!!!','2014-06-21 15:13:27',0),(5,3,27,'Here\'s the first post, I really need to set up a WYSIWIG style editor for this thing.\r\n\r\nIndeed...                                        ','2014-06-21 19:09:05',0),(6,3,27,'And here\'s another post.                                        ','2014-06-21 19:09:24',0),(7,4,38,'Here\'s some intro text.  i\'ll try to insert some newlines and whatnot.\r\nhere\'s one for instance.\r\nAnd another\r\nand another .....................................\r\n\r\n-- end                                        ','2014-06-21 19:13:33',0),(8,4,38,'And here\'s another reply.                                        ','2014-06-21 19:13:56',0),(9,3,38,'And here\'s a reply by shredderdeath!','2014-06-21 21:29:57',0),(10,4,27,'And a reply by deathgrindfreak.                                        ','2014-06-21 21:52:27',0),(11,2,39,'Hells yeah!  I totally fucking agree with what you\'re saying\r\n\r\n-- MCThrasher','2014-06-22 16:02:24',0),(12,2,40,'Whatup Broskis?!!!!                                     ','2014-06-22 16:48:47',0),(13,5,42,'Blahness','2014-06-22 22:41:43',0),(19,5,42,'Here\'s the final reply.                                       ','2014-06-23 18:36:00',0),(20,5,27,'Another reply                                        ','2014-06-23 19:07:29',0),(21,6,27,'And here\'s some content                                        ','2014-06-23 19:12:36',0),(22,7,27,'I edited the first comment!                          \r\n                                        ','2014-06-25 22:08:27',1),(23,7,27,'Reply to first post','2014-06-25 22:09:08',0),(24,7,42,'<quote>Here\'s a quoted statement</quote>\r\n\r\nHey, I quoted a statement!\r\n                                        \r\n                                        ','2014-06-29 08:30:00',1),(25,4001,42,'Here\'s the first post                                        ','2014-06-29 21:08:03',0);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `threads`
--

DROP TABLE IF EXISTS `threads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `threads` (
  `thread_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `forum_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `subject` varchar(150) NOT NULL,
  `views` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`thread_id`),
  KEY `user_id` (`user_id`),
  KEY `forum_id` (`forum_id`),
  FULLTEXT KEY `subject` (`subject`)
) ENGINE=MyISAM AUTO_INCREMENT=4002 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `threads`
--

LOCK TABLES `threads` WRITE;
/*!40000 ALTER TABLE `threads` DISABLE KEYS */;
INSERT INTO `threads` VALUES (1,1,27,'blah',36),(2,2,27,'I\'m going to recommend some awesome shit, and you\'re going to like it!!!!!',16),(3,1,27,'A test thread with a big ass title.  Hopefully it will truncate properly.',69),(4,3,38,'Here\'s an example post by another user, if it also truncates properly then fuck yeah!!!!',10),(5,1,42,'New Thread for testing.',52),(6,2,27,'Here\'s a new thread...',2),(7,1,27,'New Thread With an Example Title',95),(4001,4,42,'An Example Post About A Tour...',8);
/*!40000 ALTER TABLE `threads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `time_zone` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` char(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `thumb_url` varchar(60) NOT NULL DEFAULT 'default.png',
  `joined` datetime NOT NULL,
  `location` varchar(60) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `login` (`username`,`pass`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (27,'-06:00','deathgrindfreak','12fc03552919f7816c327730033581db7a772d4b','john.cooper.bell@gmail.com','404px-K2_East_Face_1909.jpg','2013-06-21 11:11:11','United States','2838023a778dfaecdc212708f721b788',1),(38,'-06:00','shredderdeath','68c80d4d298b034eff3d01df7438fd298de385e2','shredderdeath@hotmail.com','863a190416ae40cac11ba0d8b74fc71b-hd2.jpg','2013-06-21 11:11:11','United States','fc49306d97602c8ed1be1dfbf0835ead',1),(39,'-08:00','MCThrasher','7b71748522d4dc181a341437faf316b5ca395965','thrash@hotmail.com','default.png','2013-06-21 11:11:11','United States','c81e728d9d4c2f636f067f89cc14862c',1),(40,'+10:00','TotalDouche','379e0f698d41a0c5c363d42caf1ad1e9027d896e','totaldbag@gmail.com','default.png','2014-06-22 16:47:21','Australia','839ab46820b524afda05122893c2fe8e',1),(42,'+00:00','HallyLikeSally','dfdb53959fb878dcfbca048ed2714f11b8757116','hallybell@hotmail.com','G7YSzjm.gif','2014-06-22 19:19:03','United Kingdom','c0e190d8267e36708f955d7ab048990d',1);
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

-- Dump completed on 2014-07-01 13:10:03
