-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.1.42-community


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema surejobs
--

CREATE DATABASE IF NOT EXISTS surejobs;
USE surejobs;

--
-- Definition of table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` varchar(45) NOT NULL DEFAULT '',
  `name` varchar(45) DEFAULT NULL,
  `emailid` varchar(45) DEFAULT NULL,
  `mobileno` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `enterydate` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id`,`name`,`emailid`,`mobileno`,`username`,`password`,`enterydate`) VALUES 
 ('01','Emma','atsueemmy@gmail.com','07067925940','deprince','atsue39941','2018-01-05');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;


--
-- Definition of table `available_jobs`
--

DROP TABLE IF EXISTS `available_jobs`;
CREATE TABLE `available_jobs` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `jbtitle` varchar(45) NOT NULL DEFAULT '',
  `posted_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `jb_content` varchar(225) NOT NULL DEFAULT '',
  `jb_poster_name` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `available_jobs`
--

/*!40000 ALTER TABLE `available_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `available_jobs` ENABLE KEYS */;


--
-- Definition of table `company_info`
--

DROP TABLE IF EXISTS `company_info`;
CREATE TABLE `company_info` (
  `id` varchar(45) NOT NULL DEFAULT '0',
  `cname` varchar(45) NOT NULL DEFAULT '',
  `address` varchar(45) NOT NULL DEFAULT '',
  `city` varchar(45) NOT NULL DEFAULT '',
  `state` varchar(45) NOT NULL DEFAULT '',
  `contactno` varchar(45) NOT NULL DEFAULT '',
  `website` varchar(45) NOT NULL DEFAULT '',
  `email` varchar(45) NOT NULL DEFAULT '',
  `username` varchar(45) NOT NULL DEFAULT '',
  `password` varchar(45) NOT NULL DEFAULT '',
  `entrydate` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_info`
--

/*!40000 ALTER TABLE `company_info` DISABLE KEYS */;
INSERT INTO `company_info` (`id`,`cname`,`address`,`city`,`state`,`contactno`,`website`,`email`,`username`,`password`,`entrydate`) VALUES 
 ('151853169411771','Panet','Ibb sq','Makurdi','Benue','08076760001','www.panettech.com.ng','jamest@gmail.com','james','panet','2018-02-14'),
 ('15185317801424','Abu_creations','Opposite township hall Annune','Makurdi','Benue','08076760001','www.free2naijakings.com.ng','abughdyerternenge@yahoo.com','Danitex','Danitex111','2018-02-14'),
 ('151853354515896','Domacyla','NO.1 Lagos street wada, Makurdi','Makurdi','Benue','080220000001','www.dmcyla.com','dmacyla@gmail.com','Miriam','gm12345','2018-02-13');
/*!40000 ALTER TABLE `company_info` ENABLE KEYS */;


--
-- Definition of table `company_post_job`
--

DROP TABLE IF EXISTS `company_post_job`;
CREATE TABLE `company_post_job` (
  `jobid` int(10) unsigned NOT NULL DEFAULT '0',
  `cid` varchar(45) NOT NULL DEFAULT '',
  `cname` varchar(45) NOT NULL DEFAULT '',
  `jobcategory` varchar(45) NOT NULL DEFAULT '',
  `requiedskills` varchar(45) NOT NULL DEFAULT '',
  `role` varchar(45) NOT NULL DEFAULT '',
  `minimum_qualification` varchar(45) NOT NULL DEFAULT '',
  `max_age` varchar(45) NOT NULL DEFAULT '',
  `expectedsalary` varchar(45) NOT NULL DEFAULT '',
  `joblocation` varchar(45) NOT NULL DEFAULT '',
  `working_our` varchar(45) NOT NULL DEFAULT '',
  `jod_description` varchar(45) NOT NULL DEFAULT '',
  `last_applydate` date NOT NULL DEFAULT '0000-00-00',
  `entrydate` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`jobid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_post_job`
--

/*!40000 ALTER TABLE `company_post_job` DISABLE KEYS */;
/*!40000 ALTER TABLE `company_post_job` ENABLE KEYS */;


--
-- Definition of table `create_user`
--

DROP TABLE IF EXISTS `create_user`;
CREATE TABLE `create_user` (
  `id` varchar(45) NOT NULL DEFAULT '0',
  `ajid` varchar(45) NOT NULL DEFAULT '',
  `status` varchar(45) NOT NULL DEFAULT '',
  `entrydate` date NOT NULL DEFAULT '0000-00-00',
  `role` varchar(45) NOT NULL DEFAULT '',
  `username` varchar(45) NOT NULL DEFAULT '',
  `password` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_user`
--

/*!40000 ALTER TABLE `create_user` DISABLE KEYS */;
INSERT INTO `create_user` (`id`,`ajid`,`status`,`entrydate`,`role`,`username`,`password`) VALUES 
 ('151869144821338','15186914486539','active','2018-02-15','','Daniel','adasho2018'),
 ('151869151427240','151869151411905','active','2018-02-15','','Daniel','adasho2018'),
 ('151869178919238','151869178917255','active','2018-02-15','','Danitex24','adasho2018'),
 ('151869193017684','151869193012733','active','2018-02-15','Staff','andrew','mbaasema'),
 ('151869231032580','15186923106189','active','2018-02-15','user','Atsue','atsue111'),
 ('151869240712642','15186924074851','active','2016-01-27','user','Felix','abur'),
 ('151869247019376','15186924702601','active','2012-01-27','user','Bmbass','mbaasema'),
 ('151939611732153','151939611718526','active','2018-02-23','Staf','deprince','atsue39941'),
 ('152049701612670','15204970169951','active','2018-03-08','Staf','Danitex24','danitex24'),
 ('677','6t','active','1990-01-01','student','','');
/*!40000 ALTER TABLE `create_user` ENABLE KEYS */;


--
-- Definition of table `edu_info_of_jobseeker`
--

DROP TABLE IF EXISTS `edu_info_of_jobseeker`;
CREATE TABLE `edu_info_of_jobseeker` (
  `school` varchar(45) NOT NULL DEFAULT '',
  `qualification` varchar(45) NOT NULL DEFAULT '',
  `passyear` varchar(45) NOT NULL DEFAULT '',
  `enrollno` varchar(45) NOT NULL DEFAULT '',
  `entrydate` date NOT NULL DEFAULT '0000-00-00',
  `hubbie` varchar(45) NOT NULL DEFAULT '',
  `workingexperience` varchar(45) NOT NULL DEFAULT '',
  `sname` varchar(45) NOT NULL DEFAULT '',
  `fname` varchar(45) NOT NULL DEFAULT '',
  `mname` varchar(45) NOT NULL DEFAULT '',
  `gender` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`enrollno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `edu_info_of_jobseeker`
--

/*!40000 ALTER TABLE `edu_info_of_jobseeker` DISABLE KEYS */;
INSERT INTO `edu_info_of_jobseeker` (`school`,`qualification`,`passyear`,`enrollno`,`entrydate`,`hubbie`,`workingexperience`,`sname`,`fname`,`mname`,`gender`) VALUES 
 ('UAM','b. Agric. Edu','2018','12345','2018-02-05','Reading, Dancing, Singing','Teacher','mbaasema','Aondona','Andrew','m'),
 ('COE K/ala','NCE','2018','1234567890','2018-02-05','Reading, Dancing, Singing','Computer Instructor','Abu','Dan','Rhymes','m'),
 ('COE K/ala','NCE','2015','15185990064286','2018-02-14','Reading, playing football','Computer Instructor','Mbaasema','Aondona','Andrew','m'),
 ('Nass. State Politech Lafia','ND','2016','151887042825805','2018-02-17','Travering, watching movie','Teacher','Iordye','Atese','Stephanie','f'),
 ('BSU','NCE','2018','enrollno','2018-02-05','Reading, Dancing, Singing','Teacher','mbaasema','Aondona','Andrew','m');
/*!40000 ALTER TABLE `edu_info_of_jobseeker` ENABLE KEYS */;


--
-- Definition of table `jobseekers`
--

DROP TABLE IF EXISTS `jobseekers`;
CREATE TABLE `jobseekers` (
  `id` varchar(45) NOT NULL DEFAULT '',
  `sname` varchar(45) NOT NULL DEFAULT '',
  `fname` varchar(45) NOT NULL DEFAULT '',
  `mname` varchar(45) NOT NULL DEFAULT '',
  `gender` varchar(45) NOT NULL DEFAULT '',
  `dob` date NOT NULL DEFAULT '0000-00-00',
  `address` varchar(45) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL DEFAULT '',
  `state` varchar(45) NOT NULL DEFAULT '',
  `localgovt` varchar(45) NOT NULL DEFAULT '',
  `mobileno` varchar(45) NOT NULL DEFAULT '',
  `email` varchar(45) NOT NULL DEFAULT '',
  `entrydate` date NOT NULL DEFAULT '0000-00-00',
  `username` varchar(45) NOT NULL DEFAULT '',
  `password` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobseekers`
--

/*!40000 ALTER TABLE `jobseekers` DISABLE KEYS */;
INSERT INTO `jobseekers` (`id`,`sname`,`fname`,`mname`,`gender`,`dob`,`address`,`state`,`localgovt`,`mobileno`,`email`,`entrydate`,`username`,`password`) VALUES 
 ('15186156531083','James','Rhymes','Clive','m','1990-01-01',0x636C6F736520746F20416D61636F20696E6475737472696573,'Benue','Katsina Ala','09038573021','james11@gmail.com','2018-02-14','clive','clive111'),
 ('151887008211254','Iordye','Atese','Stephanie','f','1993-01-01',0x496E7465726E6174696F6E616C206D6B74,'Benue','Buruku','09067853260','sexzysteph@gmail.com','2018-02-17','Steph','atese111'),
 ('15204965811496','Abughdyer','Ternenge','Daniel','m','1990-01-01',0x4F70706F7369746520746F776E736869702068616C6C20416E6E756E65,'Benue','Tarka','08039575760','danielfree2rhymes@gmail.com','2018-03-08','Danitex24','danitex24'),
 ('1521543943587','Ajon','Terfa','Joseph','m','1990-01-01',0x496E696B7069207374726565742C2068696768206C6576656C206D6B64,'Benue','Makurdi','09096480921','ajonter33@gmail.com','2018-03-20','ajon','terfa');
/*!40000 ALTER TABLE `jobseekers` ENABLE KEYS */;


--
-- Definition of table `printout`
--

DROP TABLE IF EXISTS `printout`;
CREATE TABLE `printout` (
  `id` varchar(45) NOT NULL DEFAULT '',
  `sname` varchar(45) NOT NULL DEFAULT '',
  `fname` varchar(45) NOT NULL DEFAULT '',
  `mname` varchar(45) NOT NULL DEFAULT '',
  `gender` varchar(45) NOT NULL DEFAULT '',
  `dob` varchar(45) NOT NULL DEFAULT '',
  `address` varchar(45) NOT NULL DEFAULT '',
  `state` varchar(45) NOT NULL DEFAULT '',
  `localgvt` varchar(45) NOT NULL DEFAULT '',
  `mobileno` varchar(45) NOT NULL DEFAULT '',
  `email` varchar(45) NOT NULL DEFAULT '',
  `entrydate` varchar(45) NOT NULL DEFAULT '',
  `username` varchar(45) NOT NULL DEFAULT '',
  `password` varchar(45) NOT NULL DEFAULT '',
  `status` varchar(45) NOT NULL DEFAULT '',
  `roll` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `printout`
--

/*!40000 ALTER TABLE `printout` DISABLE KEYS */;
INSERT INTO `printout` (`id`,`sname`,`fname`,`mname`,`gender`,`dob`,`address`,`state`,`localgvt`,`mobileno`,`email`,`entrydate`,`username`,`password`,`status`,`roll`) VALUES 
 ('151861378513599','','','','','','','','','mobileno','email','entrydate','username','password','status','roll'),
 ('151861601731126','','','','','','','','','mobileno','email','entrydate','username','password','status','roll'),
 ('151861614110519','','','','','','','','','mobileno','email','entrydate','username','password','status','roll'),
 ('151861744625450','','','','','','','','','mobileno','email','entrydate','username','password','status','roll');
/*!40000 ALTER TABLE `printout` ENABLE KEYS */;


--
-- Definition of table `suport_inbox_msg`
--

DROP TABLE IF EXISTS `suport_inbox_msg`;
CREATE TABLE `suport_inbox_msg` (
  `id` varchar(45) NOT NULL DEFAULT '0',
  `name` varchar(45) NOT NULL DEFAULT '',
  `received_from` varchar(45) NOT NULL DEFAULT '',
  `subject` varchar(45) NOT NULL DEFAULT '',
  `msg` varchar(225) NOT NULL DEFAULT '0000-00-00',
  `sent_date` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suport_inbox_msg`
--

/*!40000 ALTER TABLE `suport_inbox_msg` DISABLE KEYS */;
INSERT INTO `suport_inbox_msg` (`id`,`name`,`received_from`,`subject`,`msg`,`sent_date`) VALUES 
 ('15193002527136','sq','fef','vfe','gbg','2018-02-22'),
 ('151930053711928','Clive','clive1@gmail.com','Complain','Good day admin, i would love to ask if you can check my profile cos is not logging me in thanks','2018-02-22'),
 ('151930060820051','Daniel','danielfree2rhymes24@gmail.com','Complain','Good day admin, i would love to ask if you can check my profile cos is not logging me in thanks','2018-02-22'),
 ('151980690824164','John','john1@gmail.com','appreciation','job weldone !!!','2018-02-28'),
 ('151980703422733','Eze','eze222@gmail.com','appreciation','job weldone !!!','2018-02-28');
/*!40000 ALTER TABLE `suport_inbox_msg` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
