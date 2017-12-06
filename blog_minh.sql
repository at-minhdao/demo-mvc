-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
--
-- Host: 192.168.33.11    Database: August_Blog
-- ------------------------------------------------------
-- Server version	5.7.20-0ubuntu0.16.04.1

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
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `preview_text` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `detail_text` text COLLATE utf8_unicode_ci,
  `user_id` int(11) DEFAULT NULL,
  `date_create` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'Chưa bao giờ','Trong cơn mưa đêm nhẹ như gió..','Trong cơn mưa đêm nhẹ như gió, trôi qua không gian và nguôi lắng dần',2,'2017-12-29 00:00:00'),(2,'Lý Cây Bông','Cô ơi cô đừng đi lấy chồng \nVề Tây Đô bên dòng sông tui ngồi hát cô nghe','Cô thắm ơi cô thắm... \nCô nge tui nói nè cô thắm \nNgười dân quận tui thật thà chất phát lắm \nYêu thương thì tui nói tui thương... \nCô ơi cô đừng đi lấy chồng \nVề Tây Đô bên dòng sông tui ngồi hát cô nghe \nTrời ơi cô đừng đi lấy chồng \nĐể 2 thằng buồn bên bài hát lý cây bông \nAnh ngâm nga vài câu hò , câu hò lý cây bông \nAnh hò cho một cô em gái đang chai tóc bên song \nAnh chỉ sống với máy chèo không có đất mênh mong \nChỉ cần em còn ngồi chai tóc anh quyết ở mãi bên sông !! \nƠi hò là hò ơi ... trong đầm gì đẹp bằng sen \nQuê mình ai đẹp bằng em , em xinh đẹp không cần bằng khen \nMới tí tuổi mà đã biết thẹn , gội bồ kết nên tóc em đen \nDáng diệu dàng và đoan trang đừng vội về nhà chi sớm , em ơi .. \nKHOAN !!! \nBông trắng và Bông xanh \nCho anh nhà quê hỏi em còn độc thân hay chăng \nĐể anh biết anh còn chờ ngày cùng đung cơm thổi lửa \nĂn chung một mâm cơm , hò cho em nghe mỗi bữa \n2 đứa gặp – là duyên \nGhe anh niễn – rồi nghiên \nEm nở nụ cười duyên vậy là em thích anh là xiền ! \nAnh biết anh không nhiều tiền , nhưng mà tiền không phải là quyền \nAnh có quyền thường.. quyền nhớ... quyền viết cho em bài thơ \nEm gái đừng vội làm ngơ khi ghe anh chỉ chở lúa \nBiết đâu anh thành tỷ phú khi lúa thóc anh trúng mùa \nChỉ cần ta còn bên nhau và cùng chung một cơn mơ \nChứ đừng bến bồi – bến lỡ để anh mãi hoài mong chờ em ơi!! \nTui biết là nhìn cô đẹp tui nói thiệt đó cô ơi \nChắc là cô tên Thắm , cô xuống chơi từ phố mới \nMấy thằng nhỏ trong xóm còn đồn là qua bác Năm tìm chỗ đợi \nChờ coi thằng nào tốt đem miếng trầu rồi vô chơi \nTui biết là số tui xui da thì đen mà chân thì phèn \nNhiều khi muốn cô để ý nhưng ngậm bồ hòn ko *** gì thẹn \nBởi cầu khỉ còn đong đưa, tình của a còn bán chiếu \nTrăng chỉ còn 1 nửa khi thằng 2 lúa tui đang yêu \nLý nàng ơi cho kiệu vàng anh đưa đón \nEm Ve nhà a lam vo rồi hát a nghe bài ru con \nĐể a dạy e giăng câu, cho e bài dí dầu \nTrước nhà a có cây khế ngọt, quê mình thưog còn bỏ đi đâu \nNhà e dù mấy sông cũng lội \nChờ cho pháo nổ ra giêng thi chung đôi \nA thì canh thân , còn e dần đúng rồi \nÔng mai nói tụi mình hợp e đi theo a là trúng mối \nCô ơi cô đừng đi lấy chồng \nVề Tây Đô bên dòng sông tui ngồi hát cô nghe \nTrời ơi cô đừng đi lấy chồng \nĐể 2 thằng buồn bên bài hát lý cây bông',2,NULL),(5,'Lạc Nhau Có Phải Muôn Đời ','Thế giới bé thế nào \r\nMình gặp nhau có phải muôn đời ','Thế giới bé thế nào \r\nMình gặp nhau có phải muôn đời \r\nNgày mà người mang đến một khúc hát không thể quên \r\nBài hát với những mơ mộng \r\nBài hát với những hy vọng \r\nCho đời ta chút vui \r\nCho đời ta chút thương \r\n. \r\nThế giới lớn thế nào \r\nMình lạc nhau có phải muôn đời \r\nDòng người vội vàng qua người sẽ đứng nơi đâu chờ ta \r\nChờ giữa quán xá ven đường \r\nChờ cuối góc phố năm nào \r\nXin chờ ta chút thôi. Chút thôi! \r\n\r\nBình minh đến đón ánh nắng sớm mình hẹn hò chốn thân quen ngày xưa \r\nHoàng hôn xuống dưới góc phố vắng mình cười nói vu vơ bao chuyện qua \r\nVì tình yêu ta trao người hết xin người đừng khiến tim này mong nhớ \r\nHãy hứa sẽ mãi bên ta \r\n\r\nNgày vẫn thế ấm áp tiếng nói nụ cười người với bao nhiêu buồn vui \r\nChiều buông nắng gió vẫn khẽ hát thì thầm những khúc ca cho tình nhân \r\nLàm sao khi con tim nhỏ bé mơ hoài những phút giây ôm lấy người \r\nĐời như một giấc mơ mãi không tàn vì người...',NULL,'2017-11-30 23:03:40'),(6,'Điều Anh Biết ','Anh không biết bao nhiêu sao trên trời \r\nAnh không biết cuộc đời mai ra sao \r\nDù gian lao dù ra sao thì anh vẫn luôn có \r\nCó một người luôn bên cạnh anh mãi thôi \r\nAnh không biết yêu em sao cho vừa \r\n','Anh không biết bao nhiêu sao trên trời \r\nAnh không biết cuộc đời mai ra sao \r\nDù gian lao dù ra sao thì anh vẫn luôn có \r\nCó một người luôn bên cạnh anh mãi thôi \r\nAnh không biết yêu em sao cho vừa \r\nAnh không biết ngọt ngào hay trăng sao \r\nTình yêu anh dù không mấy lời nhưng lòng a biết ý nghĩa cuộc đời này khi có em \r\n(ĐK) \r\nVà em ơi điều anh biết là Mỗi khi em cười là bao nhiêu phiền lo trong đời biến tan \r\nVà em ơi điều anh biết là Nỗi nhớ tơi bời mỗi khi em rời xa chốn đây em giận anh',NULL,'2017-11-30 23:08:02'),(7,'Thấy Là Yêu Thương ','Ngày yêu xa ai chờ đợi ai nhưng hoài không thấy bóng \r\nĐợi nghe tiếng nói chất chứa những tâm tư sâu trong lòng \r\nNgày yêu xa ai giận hờn ai vô tình không nhấc máy ','Ngày yêu xa ai chờ đợi ai nhưng hoài không thấy bóng \r\nĐợi nghe tiếng nói chất chứa những tâm tư sâu trong lòng \r\nNgày yêu xa ai giận hờn ai vô tình không nhấc máy \r\nĐể cho những ấm ức nhức nhối dâng lên nơi tim này \r\nNgày dài trông, đêm thức trắng, chờ tin nhắn nỗi nhớ em từng giờ. Chẳng thể vứt nỗi buồn đi đâu bây giờ \r\nMột tin nhắn, một câu nói, đủ làm trái tim vui trở lại ngay. Lại tiếp nối ấm áp khẽ vang bên tai \r\nMong đợi 2 4 6 để thấy nhau trên màn hình Zalo \r\nDù cho phương trời kia đang nắng hay mưa rào \r\nBởi vì khi yêu trái tim ngàn lần nhớ \r\nBởi vì khi yêu sáng đêm thao thức chờ mong \r\nBởi vì khi trái tim này đã yêu ta ngồi đếm bao nhiêu ngày ta xa cách \r\nBởi vì khi yêu trái tim ngàn lần nhớ \r\nBởi vì khi yêu chúng ta ngàn lần nhớ \r\nMười ngàn cây trăm cuộc gọi nhỡ đêm dài anh bỡ ngỡ \r\nMùa đông đến nhớ khoác áo ấm hẵng bước đi ra đường \r\nNhìn người ta vui đùa bên nhau anh lại cảm thấy nhớ \r\nNgồi xem những kí ức ấm áp đóng khung treo trên tường',NULL,'2017-12-01 09:46:57'),(9,'Túy Âm','Rót đến tràn ly, anh chìm đắm trong men cay đắng nồng, \r\nKhóc chát làn mi, uống cùng anh cho đêm nay say chất ngất !','Rót đến tràn ly, anh chìm đắm trong men cay đắng nồng, \r\nKhóc chát làn mi, uống cùng anh cho đêm nay say chất ngất ! \r\nDẫu năm tháng ấy còn đâu những đam mê ta kiếm tìm? \r\nMàu mắt xanh ngời lạc giữa mây ngàn về chốn xa xôi... \r\nHãy say cùng anh, hãy hát cùng anh, hãy khóc cùng anh \r\nThêm 1 lần... \r\nĐể anh được gần trái tim của em dù trong phút giây, \r\nHình bóng người tan biến dần phía sau những nỗi sầu, \r\nVới em chắc quá đủ cho một mối tình... \r\nDẫu em không thể ở lại với anh, ',NULL,'2017-12-01 07:36:28'),(10,'Look What You Made Me Do ','I don\'t like your little games \r\nDon\'t like your titled stage \r\nThe role you made me play \r\nOf the fool, no, I don\'t like you \r\n','I don\'t like your little games \r\nDon\'t like your titled stage \r\nThe role you made me play \r\nOf the fool, no, I don\'t like you \r\n\r\nI don\'t like your perfect crime \r\nHow you laugh when you lie \r\nYou said the gun was mine \r\nIsn\'t cool, no, I don\'t like you \r\n\r\n[Pre-Chorus] \r\nBut I got smarter, I got harder in the nick of time \r\nHoney, I rose up from the dead, I do it all the time \r\nI\'ve got a list of names and yours is in red, underlined \r\nI check it once, then I check it twice, oh! \r\n\r\n[Chorus] \r\nOoh, look what you made me do \r\nLook what you made me do \r\nLook what you just made me do \r\nLook what you just made me do \r\nOoh, look what you made me do \r\nLook what you made me do \r\nLook what you just made me do \r\nLook what you just made me do \r\n\r\n[Verse 2] \r\nI don\'t like your kingdom keys \r\nThey once belonged to me \r\nYou ask me for a place to sleep \r\nLocked me out and threw a feast (what?) ',NULL,'2017-12-01 07:37:21'),(11,'Despacito','Sí, sabes que ya llevo un rato mirándote \r\nTengo que bailar contigo hoy \r\nVi que tu mirada ya estaba llamándome \r\nMuéstrame el camino, que yo voy ','Ay \r\nFonsi, DY \r\nOh, oh no, oh no (ey) \r\nHey, yeah, diri-diri-diriridi, Daddy, go! \r\n\r\nSí, sabes que ya llevo un rato mirándote \r\nTengo que bailar contigo hoy \r\nVi que tu mirada ya estaba llamándome \r\nMuéstrame el camino, que yo voy \r\n\r\nOh, tú, tú eres el imán y yo soy el metal \r\nMe voy acercando y voy armando el plan \r\nSólo con pensarlo, se acelera el pulso \r\n\r\nYa, ya me estás gustando más de lo normal \r\nTodos mis sentidos van pidiendo más \r\nEsto hay que tomarlo sin ningún apuro \r\n\r\nDespacito \r\nQuiero respirar tu cuello despacito \r\nDeja que te diga cosas al oído \r\nPara que te acuerdes si no estás conmigo \r\n\r\nDespacito \r\nQuiero desnudarte a besos despacito \r\nFirmar las paredes de tu laberinto \r\nY hacer de tu cuerpo todo un manuscrito \r\n\r\nQuiero ver bailar tu pelo, quiero ser tu ritmo \r\nQue le enseñes a mi boca tus lugares favoritos \r\nDéjame sobrepasar tus zonas de peligro \r\nHasta provocar tus gritos y que olvides tu apellido \r\n\r\nSi te pido un beso, ven, dámelo \r\nYo sé que estás pensándolo \r\nLlevo tiempo intentándolo \r\nMami, esto es dando y dándolo \r\n\r\nSabes que tu corazón conmigo te hace bam-bam \r\nSabes que esa beba está buscando de mi bam-bam \r\n\r\nVen, prueba de mi boca para ver cómo te sabe \r\nQuiero, quiero, quiero ver cuánto amor a ti te cabe \r\nYo no tengo prisa, yo me quiero dar el viaje \r\nEmpezamos lento, después salvaje',NULL,'2017-12-01 07:38:10');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'minh','Dao Thanh Minh','123'),(2,'hieule','Le Thi Hieu','123'),(3,'dtminh188','Dao Thanh Minh ','123'),(11,'minh1','Thanh Minh','123'),(14,'hieucho','chohieu','123');
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

-- Dump completed on 2017-12-06 16:01:55
