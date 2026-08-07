-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2026 at 05:07 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts_customuser`
--

CREATE TABLE `accounts_customuser` (
  `id` bigint(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `last_login` datetime(6) DEFAULT NULL,
  `is_superuser` tinyint(1) NOT NULL,
  `username` varchar(150) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `email` varchar(254) NOT NULL,
  `is_staff` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `date_joined` datetime(6) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `auth_group`
--

CREATE TABLE `auth_group` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `auth_permission`
--

CREATE TABLE `auth_permission` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content_type_id` int(11) NOT NULL,
  `codename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auth_permission`
--

INSERT INTO `auth_permission` (`id`, `name`, `content_type_id`, `codename`) VALUES
(1, 'Can add user', 1, 'add_customuser'),
(2, 'Can change user', 1, 'change_customuser'),
(3, 'Can delete user', 1, 'delete_customuser'),
(4, 'Can view user', 1, 'view_customuser'),
(5, 'Can add log entry', 2, 'add_logentry'),
(6, 'Can change log entry', 2, 'change_logentry'),
(7, 'Can delete log entry', 2, 'delete_logentry'),
(8, 'Can view log entry', 2, 'view_logentry'),
(9, 'Can add permission', 3, 'add_permission'),
(10, 'Can change permission', 3, 'change_permission'),
(11, 'Can delete permission', 3, 'delete_permission'),
(12, 'Can view permission', 3, 'view_permission'),
(13, 'Can add group', 4, 'add_group'),
(14, 'Can change group', 4, 'change_group'),
(15, 'Can delete group', 4, 'delete_group'),
(16, 'Can view group', 4, 'view_group'),
(17, 'Can add user', 5, 'add_user'),
(18, 'Can change user', 5, 'change_user'),
(19, 'Can delete user', 5, 'delete_user'),
(20, 'Can view user', 5, 'view_user'),
(21, 'Can add content type', 6, 'add_contenttype'),
(22, 'Can change content type', 6, 'change_contenttype'),
(23, 'Can delete content type', 6, 'delete_contenttype'),
(24, 'Can view content type', 6, 'view_contenttype'),
(25, 'Can add session', 7, 'add_session'),
(26, 'Can change session', 7, 'change_session'),
(27, 'Can delete session', 7, 'delete_session'),
(28, 'Can view session', 7, 'view_session');

-- --------------------------------------------------------

--
-- Table structure for table `auth_user`
--

CREATE TABLE `auth_user` (
  `id` int(11) NOT NULL,
  `password` varchar(128) NOT NULL,
  `last_login` datetime(6) DEFAULT NULL,
  `is_superuser` tinyint(1) NOT NULL,
  `username` varchar(150) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `email` varchar(254) NOT NULL,
  `is_staff` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `date_joined` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auth_user`
--

INSERT INTO `auth_user` (`id`, `password`, `last_login`, `is_superuser`, `username`, `first_name`, `last_name`, `email`, `is_staff`, `is_active`, `date_joined`) VALUES
(1, 'pbkdf2_sha256$720000$ti9FOAzg1Raiga6MWFp4WD$8PlsIjARt+3c7EqtsbCngC5mDNGM9qqXRT8tDZdCb9w=', '2024-07-28 14:47:18.852270', 0, 'OKay', '', '', '', 0, 1, '2024-07-28 14:47:18.220538'),
(2, 'pbkdf2_sha256$720000$RUAGsQw7nD98PaMBUsC0BA$o0jI+fzZwxqp496Qj6YMIb445JgRglwCCawucqz8Gok=', '2024-07-29 02:54:21.846516', 0, 'Fuck', '', '', '', 0, 1, '2024-07-28 14:54:05.985051');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `b_name` varchar(100) NOT NULL COMMENT 'ชื่อบัญชี',
  `b_number` varchar(10) NOT NULL COMMENT 'เลขบัญชี',
  `b_owner` varchar(100) NOT NULL COMMENT 'เจ้าของบัญชี',
  `b_img` varchar(500) NOT NULL COMMENT 'โลโก้'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`b_name`, `b_number`, `b_owner`, `b_img`) VALUES
('กสิกรไทย', '123456789', 'ไก่ย่าง', '');

-- --------------------------------------------------------

--
-- Table structure for table `django_content_type`
--

CREATE TABLE `django_content_type` (
  `id` int(11) NOT NULL,
  `app_label` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `django_content_type`
--

INSERT INTO `django_content_type` (`id`, `app_label`, `model`) VALUES
(1, 'accounts', 'customuser'),
(2, 'admin', 'logentry'),
(4, 'auth', 'group'),
(3, 'auth', 'permission'),
(5, 'auth', 'user'),
(6, 'contenttypes', 'contenttype'),
(7, 'sessions', 'session');

-- --------------------------------------------------------

--
-- Table structure for table `member_tbl`
--

CREATE TABLE `member_tbl` (
  `type` varchar(50) NOT NULL DEFAULT '0' COMMENT '1=admin 0=user',
  `namem` varchar(70) NOT NULL,
  `lnamem` varchar(70) NOT NULL,
  `user` varchar(150) NOT NULL,
  `password` varchar(20) NOT NULL,
  `idc` varchar(13) NOT NULL,
  `phone` varchar(10) NOT NULL COMMENT 'เบอร์โทร',
  `gmail` varchar(150) NOT NULL COMMENT 'อีเมล',
  `address` varchar(255) NOT NULL COMMENT 'ที่อยู่'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member_tbl`
--

INSERT INTO `member_tbl` (`type`, `namem`, `lnamem`, `user`, `password`, `idc`, `phone`, `gmail`, `address`) VALUES
('1', 'นางสาวชนันท์ญา', 'สีม่วง', '', '', '', '', '', 'บ้านเลขที่8หมู่13ต.โคกตูมอ.เมือง'),
('0', 'fffff', 'ffff', 'สรุปก็บุญไม่มี', '123456789', '102030405060', '0822981464', 'maytaun555555@gmail.com', 'ghgfghfghrgf'),
('0', 'rrr', 'rrr', 'บุญมี', '456', '1111111111111', '02547545', 'maytaun555555@gmail.com', 'บ้านเลขที่8หมู่13ต.โคกตูมอ.เมือง'),
('0', 'test', 'test', 'tast', '1234', '123456789123', '0822981464', 'maytaun@gmail.com', 'บ้านเลขที่45/8 ต.ครองครัว อ.คางคก จ.คราม 15420'),
('1', 'ด.ช.ชาตรี', 'ศรีสมพงษ์', 'สรุปก็บุญไม่มี', 'may0993313326', '147258369', '2147483647', '', ''),
('0', 'นางสาวชนันท์ญา', 'สีม่วง', 'popopooooo', '2547', '2147483647', '0999999', 'maytaun2547@gmail.com', 'บ้านเลขที่ 8 หมู่ 13 ต.โคกตูม อ.เมือง 15210'),
('1', 'จักรีรัตน์', 'แก้วบุษา', 'บาบี้', '25477', '3653124541441', '08546987ฃ', '', ''),
('0', 'จักรีรัตน์', 'แก้วบุษา', 'บุญมี', '123456789', '5454545454545', '0323118744', 'maytaun555555@gmail.com', 'บ้านเลขที่8หมู่13ต.โคกตูมอ.เมือง2541'),
('0', 'สามี', 'สีมา', 'มาสี', '123', '562514222', '0822981464', 'maytaun555555@gmail.com', 'บ้านเลขที่8หมู่13ต.โคกตูมอ.เมือง15210');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `idt` int(11) NOT NULL,
  `id_pro` int(11) NOT NULL,
  `id_or` int(10) UNSIGNED ZEROFILL NOT NULL COMMENT 'เลขที่ใบสั่งซื้อ',
  `orderprice` float NOT NULL COMMENT 'ราคาสินค้า',
  `orderqty` int(11) NOT NULL COMMENT 'จำนวนการสั่งซื้อ',
  `total` float NOT NULL COMMENT 'ราคารวม'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`idt`, `id_pro`, `id_or`, `orderprice`, `orderqty`, `total`) VALUES
(48, 25, 0000000152, 400, 1, 400),
(49, 24, 0000000153, 139, 1, 139),
(50, 28, 0000000767, 200, 1, 200),
(51, 14, 0000000000, 45, 1, 45),
(52, 15, 0000000768, 139, 1, 139),
(53, 15, 0000000770, 139, 1, 139),
(54, 17, 0000000772, 200, 1, 200),
(55, 15, 0000000773, 139, 1, 139),
(56, 15, 0000000774, 139, 1, 139),
(57, 15, 0000000776, 139, 1, 139),
(58, 14, 0000000777, 45, 1, 45),
(59, 15, 0000000778, 139, 1, 139),
(60, 14, 0000000779, 45, 10, 450),
(61, 14, 0000000780, 45, 2, 90);

-- --------------------------------------------------------

--
-- Table structure for table `order_tbl`
--

CREATE TABLE `order_tbl` (
  `id_or` int(10) UNSIGNED ZEROFILL NOT NULL COMMENT 'เลขที่ใบสั่งซื้อ',
  `idc` int(13) NOT NULL COMMENT 'รหัสบัตรประชาชน',
  `namem` varchar(100) NOT NULL COMMENT 'ชื่อผู้รับ',
  `lnamem` varchar(100) NOT NULL COMMENT 'นามสกุลผู้รับ',
  `address` text NOT NULL COMMENT 'ที่อยู่ผู้รับ',
  `total_price` float NOT NULL COMMENT 'ราคาสุทธิ',
  `order_status` varchar(1) NOT NULL COMMENT 'สถานะการสั่งซื้อ\r\n0=ยกเลิกการสั่งซื้อ\r\n1=สั่งซื้อ\r\n2=ชำระเงิน',
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'วันที่การสั่งซื้อ',
  `ems` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_tbl`
--

INSERT INTO `order_tbl` (`id_or`, `idc`, `namem`, `lnamem`, `address`, `total_price`, `order_status`, `reg_date`, `ems`) VALUES
(0000000767, 2147483647, 'test', 'test', 'บ้านเลขที่45/8 ต.ครองครัว อ.คางคก จ.คราม 15420', 259, '2', '2023-09-10 14:59:58', ''),
(0000000768, 2147483647, 'test', 'test', 'บ้านเลขที่45/8 ต.ครองครัว อ.คางคก จ.คราม 15420', 193.73, '2', '2023-09-10 15:00:01', ''),
(0000000769, 2147483647, 'test', 'test', 'บ้านเลขที่45/8 ต.ครองครัว อ.คางคก จ.คราม 15420', 259, '2', '2023-09-10 15:00:03', ''),
(0000000770, 2147483647, 'test', 'test', 'บ้านเลขที่45/8 ต.ครองครัว อ.คางคก จ.คราม 15420', 193.73, '2', '2023-09-10 15:00:05', ''),
(0000000771, 2147483647, 'test', 'test', 'บ้านเลขที่45/8 ต.ครองครัว อ.คางคก จ.คราม 15420', 193.73, '3', '2026-06-03 12:47:35', '26522555542'),
(0000000772, 2147483647, 'test', 'test', 'บ้านเลขที่45/8 ต.ครองครัว อ.คางคก จ.คราม 15420', 259, '3', '2026-06-03 12:47:27', ''),
(0000000773, 2147483647, 'test', 'test', 'บ้านเลขที่45/8 ต.ครองครัว อ.คางคก จ.คราม 15420', 193.73, '3', '2023-09-10 14:55:11', ''),
(0000000774, 2147483647, 'test', 'test', 'บ้านเลขที่45/8 ต.ครองครัว อ.คางคก จ.คราม 15420', 193.73, '3', '2023-09-10 14:55:11', ''),
(0000000775, 2147483647, 'rrr', 'rrr', 'บ้านเลขที่8หมู่13ต.โคกตูมอ.เมือง', 93.15, '3', '2023-09-10 14:55:11', ''),
(0000000776, 2147483647, 'test', 'test', 'บ้านเลขที่45/8 ต.ครองครัว อ.คางคก จ.คราม 15420', 193.73, '3', '2023-09-10 14:55:11', ''),
(0000000777, 2147483647, 'test', 'test', 'บ้านเลขที่45/8 ต.ครองครัว อ.คางคก จ.คราม 15420', 93.15, '3', '2023-09-10 14:55:11', ''),
(0000000778, 2147483647, 'จักรีรัตน์', 'แก้วบุษา', 'บ้านเลขที่8หมู่13ต.โคกตูมอ.เมือง2541', 193.73, '0', '2026-06-03 12:47:50', ''),
(0000000779, 2147483647, 'fffff', 'ffff', 'ghgfghfghrgf', 526.5, '0', '2026-06-03 12:47:48', ''),
(0000000780, 2147483647, 'rrr', 'rrr', 'บ้านเลขที่8หมู่13ต.โคกตูมอ.เมือง', 141.3, '0', '2026-06-03 12:47:46', '');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id_or` int(10) NOT NULL COMMENT 'เลขที่ใบสั่งซื้อ',
  `pay_money` double NOT NULL COMMENT 'จำนวนเงินที่จ่าย',
  `pay_date` date NOT NULL COMMENT 'วันที่ชำระเงิน',
  `pay_time` time NOT NULL COMMENT 'เวลาโอนเงิน',
  `pay_image` varchar(100) NOT NULL COMMENT 'สลิปยืนยัน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id_or`, `pay_money`, `pay_date`, `pay_time`, `pay_image`) VALUES
(8, 515.8, '2023-09-02', '04:00:00', 'bill_64f315cb5a7d8.jpg'),
(9, 515.8, '2023-09-02', '04:21:00', 'bill_64f31abea5db3.jpg'),
(22, 259, '2023-09-05', '08:45:00', 'bill_64f74d257fd5c.jpg'),
(23, 259, '2023-09-06', '07:47:00', 'bill_64f8912628203.png');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_pro` int(20) NOT NULL COMMENT 'รหัสสินค้า',
  `name_pro` varchar(80) NOT NULL COMMENT 'ชื่อสินค้า',
  `type_id` int(20) NOT NULL COMMENT 'รหัสประเภทสินค้า',
  `price_pro` int(5) NOT NULL COMMENT 'ราคาสินค้า',
  `num_pro` int(10) NOT NULL COMMENT 'จำนวนสินค้า',
  `details` varchar(1000) NOT NULL COMMENT 'รายระเอียดสินค้า',
  `image` varchar(255) NOT NULL COMMENT 'ชื่อไฟล์รูป'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_pro`, `name_pro`, `type_id`, `price_pro`, `num_pro`, `details`, `image`) VALUES
(14, 'สร้อย', 1, 45, 36, 'Size：39cm+5cm หางโซ่ 5 ซม. ปรับได้หวงโซ่ยาว 5 ซม. ปรับได้           ความยาวอาจไม่ตรงนิดนึง ต้องดูจากสินค้าตัวจริง Color：Gold วัสดุ: งานชุบทองคำขาว ภาพถ่ายจากสินค้าจริงของทางร้านทุกชิ้น。  การบรรจุ: กล่องสวยงาม', 'pr_64a7a562d481d.jpg'),
(15, 'Fruit among daisies', 1, 139, 23, 'ขนาด 30 เซนติเมตร ', 'pr_64a95e3e8130f.jpg'),
(16, 'Fruit among daisies', 1, 139, 8, 'ขนาด 20 เซนติเมตร', 'pr_64a9999a8e70e.jpg'),
(17, 'Dream Flower Garden', 1, 200, 25, 'Size：39cm+5cm หางโซ่ 5 ซม. ปรับได้หวงโซ่ยาว 5 ซม. ปรับได้           ความยาวอาจไม่ตรงนิดนึง ต้องดูจากสินค้าตัวจริง Color：Gold วัสดุ: งานชุบทองคำขาว ภาพถ่ายจากสินค้าจริงของทางร้านทุกชิ้น。  การบรรจุ: กล่องสวยงาม', 'pr_64a999be3e594.jpg'),
(18, 'sweet', 1, 299, 17, 'ขนาด 30 เซนติเมตร ', 'pr_64a99a027a6d2.jpg'),
(19, 'mattt', 4, 139, 8, 'ขนาด 30 เซนติเมตร ปรับขนาดได้ถึง 3 ระดับ ', 'pr_64a99a5b580d3.jpg'),
(20, 'สร้อยข้อเท้า ลายดอกเดซี่ สไลต์y2k ', 5, 230, 44, 'ขนาด 30 เซนติเมตร ปรับขนาดได้ถึง 3 ระดับ ', 'pr_64a9b46b8537c.jpg'),
(22, 'แหวนลูกปัดเฮนเมด ', 3, 45, 19, 'มีจำนวนจำกัด', 'pr_64a9b6f33bfad.jpg'),
(24, 'สร้อยลูกปัดพลาสเทล', 1, 139, 44, 'ขนาด 30 เซนติเมตร ปรับขนาดได้ถึง 3 ระดับ พรีออเดอร์รอไม่นานสินค้าทำมือ ลูกปัดสีสวยสดใส', 'pr_64d66361f0a03.jpg'),
(25, 'สตอเบอร์รี่', 1, 400, 6, 'ขนาด 30 เซนติเมตร ปรับขนาดได้ถึง 3 ระดับ ', 'pr_64d665b23a305.jpg'),
(27, 'ปลอกคอแมว | สุนัข ลูกปัดสีหวาน จี้ดอกไม้', 4, 139, 30, 'ขนาดไซร์  ss ความยาว 17-19 cm. S ความยาว 20-22 cm.   M ความยาว 23-25 cm.  L ความยาว 26-28 cm.  XL ความยาว 29-31 cm.', 'pr_64ec34bcb529f.jpg'),
(28, 'ปลอกคอ ปลอกคอแมว หมา ปลอกคอสัตว์เลี้ยง ยืดได้ เส้นเอ็น ยางยืด ลูกปัดสีพาสเทล ลูก', 4, 200, 14, 'ความยาว xS = 21-22 cm S  = 24-25cm M = 27-28 cm L = 31-32 cm', 'pr_64ec350b0c835.jpg'),
(29, 'กำไลข้อเท้าลูกปัด Handmade♡ ❌ความยาวคือยาวทั้งเส้นรวมตะขอ❌', 5, 299, 50, 'ลูกปัดขนาด 3mm. ?สินค้ามีสายปรับ 5cm. ใช้เวลาทำประมาณ 1-2วัน ไม่รับออเดอร์เร่งนะคะ', 'pr_64ec3566da7ed.jpg'),
(30, 'พร้อมส่ง ข้อเท้าลูกปัด ลูกปัดน่ารัก ราคาถูก โทนสีสันสดใส', 5, 100, 10, 'สินค้าขนาด  19-25 cm ฟรีไซส์ วัสดุ -ยางยืด  ‼ แจ้งขนาดที่ต้องการได้ที่หมายเหตุหรือข้อความนะค่ะ‼ หากต้องการเปลี่ยนสี เปลี่ยนแบบ ทักแชทได้เลยนะคะ ', 'pr_64ec35a977ebd.jpg'),
(31, 'แหวนลูกปัดโทนขาวดำFREE SIZE เอ็นยืดขนาด 6 cm ต้องการขนาดอื่นแจ้ง', 3, 20, 48, '❗❗❗วัดและเผื่อความยาวด้วยร้านจะทำตามความยาวที่กดสั่งมาไม่เผื่อให้นะคะ❗❗❗ตัดรอบส่ง 22.00 น.ส่งของวันจันทร์-ศุกร์ ❗❗ได้รับเลขพัสดุแล้วงดยกเลิก  เพราะสินค้าได้แพ็คเรียบร้อยแล้ว ก่อนสั่งขอคนรอได้นะคะ  ปกติทำไม่เกิน 2 วัน ลูกปัดขนาด 3mm. ใช้เวลาทำประมาณ 1-2วัน ไม่รับออเดอร์เร่งนะคะ Freesize', 'pr_64ec35f599e9a.jpg'),
(32, 'แหวนลูกปัดยืดได้ มีหลายแบบสีสันสดใส', 3, 20, 99, 'ลูกปัดขนาด 4mm. ใช้เวลาทำประมาณ 1-2วัน ไม่รับออเดอร์เร่งนะคะFreesize  6 cm. เอ็นยืดได้อีกเล็กน้อย', 'pr_64ec3661748f7.jpg'),
(33, 'กำไลลูกปัด 10 บาททุกลาย V.4 วัดขนาดข้อมือด้วยนะคะ', 2, 20, 39, ' วิธีวัดดูจากภาพถัดไปได้เลย หากมีข้อสงสัยสามารถทักแชทสอบถามทางร้านได้ตลอดเลยค่า ขนาดข้อมือที่นิยมสั่งคือ 15, 16, 17 เซ็นติเมตร ขนาดข้อเท้าที่นิมยมสั่งคือ 19, 20, 21 เซ็นติเมตร', 'pr_64ec36f5bbbcc.jpg'),
(34, 'กำไลลูกปัด กำไลข้อมือ ของแจก ของแถม เพิ่มแบบใหม่เรื่อยๆจ้า', 2, 15, 51, 'กำไลลูกปัด ขนาด15,16,17,18 ซม. (คลาดเคลื่อน + -ไม่เกิน0.5ซม.) ลูกปัดขนาด 4mm และจี้', 'pr_64ec374e4b035.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `type_id` int(20) NOT NULL COMMENT 'รหัสประเภทสินค้า',
  `type_name` varchar(255) NOT NULL COMMENT 'ชื่อประเภทสินค้า'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`type_id`, `type_name`) VALUES
(1, 'สร้อยคอ'),
(2, 'สร้อยข้อมือ'),
(3, 'แหวน'),
(4, 'ปลอกคอสัตว์เลี้ยง'),
(5, 'สร้อยข้อเท้า');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts_customuser`
--
ALTER TABLE `accounts_customuser`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `auth_group`
--
ALTER TABLE `auth_group`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `auth_permission`
--
ALTER TABLE `auth_permission`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `auth_permission_content_type_id_codename_01ab375a_uniq` (`content_type_id`,`codename`);

--
-- Indexes for table `auth_user`
--
ALTER TABLE `auth_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`b_number`);

--
-- Indexes for table `django_content_type`
--
ALTER TABLE `django_content_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `django_content_type_app_label_model_76bd3d3b_uniq` (`app_label`,`model`);

--
-- Indexes for table `member_tbl`
--
ALTER TABLE `member_tbl`
  ADD PRIMARY KEY (`idc`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`idt`);

--
-- Indexes for table `order_tbl`
--
ALTER TABLE `order_tbl`
  ADD PRIMARY KEY (`id_or`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id_or`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_pro`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts_customuser`
--
ALTER TABLE `accounts_customuser`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `auth_group`
--
ALTER TABLE `auth_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_permission`
--
ALTER TABLE `auth_permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `auth_user`
--
ALTER TABLE `auth_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `django_content_type`
--
ALTER TABLE `django_content_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `idt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `order_tbl`
--
ALTER TABLE `order_tbl`
  MODIFY `id_or` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT COMMENT 'เลขที่ใบสั่งซื้อ', AUTO_INCREMENT=781;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_pro` int(20) NOT NULL AUTO_INCREMENT COMMENT 'รหัสสินค้า', AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `type_id` int(20) NOT NULL AUTO_INCREMENT COMMENT 'รหัสประเภทสินค้า', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_permission`
--
ALTER TABLE `auth_permission`
  ADD CONSTRAINT `auth_permission_content_type_id_2f476e4b_fk_django_co` FOREIGN KEY (`content_type_id`) REFERENCES `django_content_type` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
