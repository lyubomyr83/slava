-- MySQL dump 10.16  Distrib 10.1.16-MariaDB, for Win32 (AMD64)
--
-- Host: 127.0.0.1    Database: slava
-- ------------------------------------------------------
-- Server version	10.1.16-MariaDB

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
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_header` varchar(255) NOT NULL,
  `post_content` text,
  `tags` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `author` varchar(255) NOT NULL,
  `created` int(10) NOT NULL,
  `page_id` int(11) NOT NULL,
  `updated` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog`
--

LOCK TABLES `blog` WRITE;
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
INSERT INTO `blog` VALUES (1,'Массовые увольнения добрались до CD Projekt','Масштабные сокращения в игровых компаниях стали пугающим трендом февраля. Сперва Activision Blizzard после самого успешного финансового года в истории компании избавилась от почти 800 сотрудников, затем чистку штата провели австралийский филиал Electronic Arts и студия ArenaNet. И вот, всего несколько дней спустя, эта напасть постигла и народную любимицу CD Projekt, ответственную за популярнейшую трилогию о похождениях ведьмака Геральта из Ривии.Журналист портала Kotaku Джейсон Шрайер пообщался с одним из экс-сотрудников компании и выяснил, что на прошлой неделе CD Projekt сократила штат GOG на 10% — в одночасье около десяти человек потеряли работу. Официальные представители польской фирмы, к которым обратился журналист, поведали, что причиной увольнений стала давно запланированная реструктуризация магазина, которая стартовала ещё в октябре прошлого года. Однако анонимный источник Шрайера утверждает, что это было относительно спонтанное решение, вызванное слабой доходностью площадки на фоне конкурентов в лице Steam и Epic Games Store, а также не оправдавшими ожидания продажами Thronebreaker: The Witcher Tales.\r\n                                                                                                                                                                                                                                                                                                                                                                                                                                                                  \r\n                                                                                                                                                                                                                                                                                                                                                                                                                                                                  Позднее, уже в своём Twitter-аккаунте Шрайер поинтересовался, станут ли финансовые трудности компании поводом поторопиться с релизом Cyberpunk 2077. Ответа журналист пока не получил, и дата релиза фантастического боевика остаётся загадкой. Зато на днях стало известно, что по-хорошему старомодный RPG-шутер обойдётся без микротранзакций, лутбоксов, «королевских битв» и даже бета-теста. Остаётся надеяться, что геймеры примут финальную версию ролевой игры не хуже, чем в своё время третьего «Ведьмака», ведь провал Cyberpunk 2077, считают аналитики, может окончательно погубить CD Projekt RED.','php7,php','a:2:{i:0;s:1:\"2\";i:1;s:1:\"1\";}','b1.jpg','Администратор',1554820216,5,NULL),(2,'Инсайды #1634: Samsung Galaxy Note10, Google Pixel 3 Lite, пентакамера от Xiaomi, новый планшет Samsung','В этом выпуске Инсайдов: Samsung Galaxy Note10 получит четыре основных камеры; Google готовится к анонсу Pixel 3 Lite; Xiaomi расширит фотовозможности флагманов оптикой от Light; неанонсированный планшет Samsung прошёл сертификацию в FCC.\r\nSamsung Galaxy Note10 получит четыре основных камеры\r\n\r\nИнтернет-ресурс SamMobile, специализирующийся на гаджетах корейского вендора, со ссылкой на собственные источники сообщил некоторые подробности о будущем флагмане. По имеющейся информации, Galaxy Note10 с артикулом SM-N975F получит основную камеру, состоящую из четырёх сенсоров.\r\n\r\nSamsung\r\n\r\nПо имеющейся информации, новинку оснастят дисплеем Infinity-O, который позволяет увеличить соотношение экрана площади лицевой панели. Инсайдеры также отмечают, что цифра 5 в составе кода устройства может указывать на 5G-версию смартфона.\r\n\r\nДетальные характеристики и дата анонса Samsung Galaxy Note10 неизвестны.\r\n\r\n \r\nGoogle готовится к анонсу Pixel 3 Lite\r\n\r\nВ базе данных американского регулятора FCC появилась запись о сертификации восьми неанонсированных смартфонов Google с кодовыми номерами G020A, G020B, G020C, G020D, G020E, G020F, G020G и G020H. Скорее всего, речь идёт о различных модификациях Pixel 3 и Pixel 3 Lite.\r\n\r\nGoogle\r\n\r\nПодробных технических характеристик гаджетов источник не раскрывает — документ содержит лишь сведения о частотных диапазонах беспроводных интерфейсов. В сопроводительной документации отмечается, что аппараты работают под управлением девятой версии ОС Android. Для всех восьми устройств установлен срок запрета на публикацию их изображений до 24 августа 2019-го.\r\n\r\nGoogle\r\n\r\nСогласно ранним утечкам, Pixel 3 Lite будет выпускаться в пластиковом корпусе и получит 3,5-мм аудиоразъём и порт USB Type-С. Смартфону приписывают 5,5-дюймовый IPS дисплей с разрешением Full HD+, процессор Snapdragon 670 с 4 ГБ ОЗУ и 32 ГБ ПЗУ, основную 12,2-мегапиксельную камеру и фронталку с разрешением сенсора 8 Мп.\r\n \r\nXiaomi расширит фотовозможности флагманов оптикой от Light\r\n\r\nКомпания Light, специализирующаяся на создании компактных камер, объявила о партнёрстве с Xiaomi. Это может означать появление продвинутых фотомодулей в ближайшем поколении смартфонов популярного вендора по аналогии с недавно анонсированным флагманом Nokia.\r\n\r\nLight\r\n\r\nВ активе Light — не только создание модулей мобильных камер, но и программное обеспечение, обеспечивающее согласованную работу всех сенсоров. И хотя партнёры ещё не сделали официального анонса очередного смартфона, аналитики прогнозируют релиз устройства Xiaomi с мультикамерой не позднее 2020-го.\r\n\r\n \r\nНеанонсированный планшет Samsung прошёл сертификацию в FCC\r\n\r\nНа сайте Федеральной комиссии по связи США появилось схематическое изображение задней панели неанонсированного планшета Samsung под кодовым номером SMP205. Судя по чертежу, гаджет получит одинарную тыльную камеру, дизайн фронтальной панели остаётся неизвестным.\r\n\r\nSamsung SMP205\r\n\r\nНа верхнем торце корпуса разместился 3,5-мм аудиоразъём, на нижнем находится гнездо зарядки (вероятно, USB Type-C), решётка динамика и отсек для стилуса.\r\n\r\nСпецификации и дата релиза загадочной новинки неизвестны.\r\n\r\nИсточник: 4pda.ru','php','2','b2.jpg','Администратор',1554820216,5,NULL),(3,'Sony показала на MWC 2019 смартфон с поддержкой 5G','Помимо уже готовых к выпуску смартфонов компания Sony показала на выставке MWC 2019 в Барселоне прототип устройства с поддержкой сетей пятого поколения. Аппарат был разработан в сотрудничестве с Qualcomm и построен на базе нового процессора Snapdragon 855 c 5G-модемом X50.\r\n\r\nSony\r\n\r\nПредставленный прототип максимально похож на флагманский Xperia 1. Аппарат оснащён таким же вытянутым дисплеем с соотношением сторон 21:9. По словам представителей Sony, устройство использует 5-миллиметровые радиоволны и передачу данных на частотах в спектре до 6 ГГц. \r\n\r\nSony 5G\r\n\r\nАдам Марш, старший менеджер Sony, заявил, что их будущие 5G-устройства будут отличаться от представленного прототипа, созданного только для демонстрации работы новых технологий. При этом компания пока не собирается спешить с внедрением поддержки 5G.\r\n\r\nИсточник: gizmochina.com','php','a:1:{i:0;s:1:\"1\";}','b3.jpg','Администратор',1554820216,6,1560357208);
/*!40000 ALTER TABLE `blog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_name_uindex` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (2,'Администрирование'),(1,'Программирование');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created` int(255) NOT NULL,
  `updated` int(255) DEFAULT NULL,
  `blog` enum('0','1') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,'Главная','Контент главной страницы',1543330191,1556633675,'0'),(3,'Контакты','Контент контактов\r\n',1543330191,1543932948,'0'),(4,'Фотогалерея','Фото',1543330191,1559754756,'0'),(5,'Блог','',1543330191,1559054365,'1'),(6,'Новости','новости',1543330191,1559054746,'1');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_login_uindex` (`login`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','12345','Администратор','admin'),(2,'slava','1234','Вячеслав','editor');
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

-- Dump completed on 2019-06-12 19:35:47
