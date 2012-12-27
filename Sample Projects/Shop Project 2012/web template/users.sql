--
-- users.sql
--
-- Table definition with sample user data in it
--  Passwords are all 'PHP'
--

--
-- Table structure for table users
--

DROP TABLE IF EXISTS users;
CREATE TABLE users (
  userID int(11) NOT NULL AUTO_INCREMENT,
  firstname varchar(50) DEFAULT '',
  lastname varchar(50) DEFAULT '',
  address varchar(100) DEFAULT NULL,
  city varchar(50) DEFAULT 'San Antonio',
  state char(2) DEFAULT 'TX',
  zip varchar(10) DEFAULT '',
  phone varchar(20) DEFAULT NULL,
  email varchar(80) DEFAULT NULL,
  password varchar(42) DEFAULT '',
  userlevel int(11) NOT NULL DEFAULT '0',
  status enum('new','activated','disabled') NOT NULL DEFAULT 'new',
  lastlogin datetime DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (userID)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table users
--

INSERT INTO users VALUES 
(1,'Dan','Zollars','San Antonio College','San Antonio','TX','78212',NULL,
'dannyz@example.com','2fec392304a5c23ac138da22847f9b7c',3,'activated','0000-00-00 00:00:00'),
(2,'Bull','Winkle','102 Antler Lane','San Antonio','TX','78212',NULL,
'bwinkle@example.com','2fec392304a5c23ac138da22847f9b7c',2,'activated','0000-00-00 00:00:00'),
(3,'Daffy','Duck','345 Duck Pond Lane','San Antonio','TX','78230',NULL,
'dduck@example.com','2fec392304a5c23ac138da22847f9b7c',2,'activated','0000-00-00 00:00:00'),
(4,'Buster','Keaton','3456 Cemetery Row','Fair Lawn','CA','99123',NULL,
'bkeaton@example.com','2fec392304a5c23ac138da22847f9b7c',0,'disabled','0000-00-00 00:00:00'),
(5,'Bugs','Bunny','5522 Carrot Top Blvd.','San Antonio','TX','78212',NULL,
'bbunny@example.com','2fec392304a5c23ac138da22847f9b7c',2,'activated','0000-00-00 00:00:00'),
(6,'Fred','Flintstone','1890 Quarry Road','San Antonio','TX','78212',NULL,
'fflintstone@example.com','2fec392304a5c23ac138da22847f9b7c',1,'activated','0000-00-00 00:00:00'),
(7,'Barney','Rubble','1892 Quarry Road','San Antonio','TX','78212',NULL,
'brubble@example.com','2fec392304a5c23ac138da22847f9b7c',1,'activated','0000-00-00 00:00:00'),
(8,'Shrek the','Ogre','12 Swamp Lane','San Antonio','TX','78212',NULL,
'sogre@example.com','2fec392304a5c23ac138da22847f9b7c',2,'activated','0000-00-00 00:00:00'),
(9,'Snow','White','234 Tiny Cove Lane','San Antonio','TX','78212',NULL,
'swhite@example.com','2fec392304a5c23ac138da22847f9b7c',1,'activated','0000-00-00 00:00:00'),
(10,'Dr. Billy','O\'Bob, Jr.','123-1/2 Corncob, #1A','San Antonio','TX','78229',NULL,
'bbob@example.com','2fec392304a5c23ac138da22847f9b7c',0,'new','0000-00-00 00:00:00'),
(11,'Demo','User','1234 Five Lane','Anytown','TX','78212',NULL,
'demo@example.com','2fec392304a5c23ac138da22847f9b7c',2,'activated','0000-00-00 00:00:00'),
(12,'Farmer','Fred','145 Halloween Drive','Alice','TX','78299',NULL,
'ffred@example.com','2fec392304a5c23ac138da22847f9b7c',2,'activated','0000-00-00 00:00:00');
