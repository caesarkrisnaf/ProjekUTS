# Host: localhost  (Version 5.5.5-10.4.27-MariaDB)
# Date: 2023-05-15 18:34:37
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "jenis_produk"
#

DROP TABLE IF EXISTS `jenis_produk`;
CREATE TABLE `jenis_produk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "jenis_produk"
#

INSERT INTO `jenis_produk` VALUES (2,'Kertas'),(3,'Alumunium'),(5,'Plastik'),(6,'Karet'),(7,'Kain');

#
# Structure for table "pesanan"
#

DROP TABLE IF EXISTS `pesanan`;
CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(45) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT 1,
  `tanggal` date NOT NULL,
  `total_harga` double NOT NULL,
  `nama_pemesan` varchar(45) NOT NULL,
  `alamat_pemesan` varchar(45) NOT NULL,
  `id_produk` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "pesanan"
#

INSERT INTO `pesanan` VALUES (9,'Pistol Air',4,'2023-05-14',180000,'Jamal','Depok',16),(10,'Mobil Mainan',3,'2023-05-14',75000,'Juki','Depok',17),(11,'Bus Tayo',2,'2023-05-14',100000,'Salma','Bogor',19),(12,'Mobil Mainan',2,'2023-05-14',50000,'Aldi','Bogor',17),(13,'Pistol Air',1,'2023-05-14',45000,'Jupri','Tasikmalaya',16),(14,'Pistol Air',2,'2023-05-14',90000,'Jupri','Tasikmalaya\r\n',16),(15,'Mobil Mainan',2,'2023-05-14',50000,'Friya','Citayam\r\n',17),(16,'Mobil Mainan',3,'2023-05-14',75000,'Akmal','Bogor\r\n',17),(17,'Mobil Mainan',1,'2023-05-14',25000,'Jaka','Depok\r\n',17),(18,'Gambaran',1,'2023-05-14',2000,'Aska','Cibinong',18),(19,'Mobil Mainan',2,'2023-05-15',50000,'Adjie','Depok',17),(20,'Mobil Mainan',3,'2023-05-15',75000,'Fian','Bogor',17);

#
# Structure for table "produk"
#

DROP TABLE IF EXISTS `produk`;
CREATE TABLE `produk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(45) DEFAULT NULL,
  `nama` varchar(45) NOT NULL,
  `harga` double NOT NULL,
  `stok` int(11) NOT NULL,
  `jenis_produk_id` int(11) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "produk"
#

INSERT INTO `produk` VALUES (16,'P01','Pistol Air',45000,1,5,'images/14052023065329pistol.jpg'),(17,'P02','Mobil Mainan',25000,1,5,'images/14052023065759mobil2.png'),(18,'P03','Gambaran',2000,3,2,'images/14052023082420gambaran.jpg'),(19,'P04','Bus Tayo',50000,2,5,'images/14052023064640tayo.jpg');
