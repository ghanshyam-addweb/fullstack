-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 24, 2022 at 08:27 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `23march`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admission`
--

CREATE TABLE `Admission` (
  `form_no` bigint(10) NOT NULL,
  `Student_name` varchar(60) NOT NULL,
  `Branch` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  `last_result` bigint(10) NOT NULL,
  `Mobile` bigint(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Admission`
--

INSERT INTO `Admission` (`form_no`, `Student_name`, `Branch`, `department`, `last_result`, `Mobile`) VALUES
(1, 'Ghanshyam', 'CE', 'B.tech', 77, 9879485678),
(2, 'Aaqib', 'CE', 'BE', 70, 9876543210),
(3, 'Ravi', 'Msc-it', 'Msc', 75, 9873216540),
(4, 'Jinal', 'Msc-it', 'Msc', 91, 7894563210),
(5, 'Nidhi', 'CE', 'BE', 92, 8596321470),
(6, 'Dipesh', 'BSC-Maths', 'B.tech', 98, 5698326255),
(7, 'navin', 'CE', 'B.tech', 62, 7845120369),
(8, 'kuldeep', 'CE', 'B.tech', 65, 8520653210),
(9, 'Meet', 'CE', 'B.tech', 58, 8754965210),
(10, 'Sanket', 'CE', 'B.tech', 68, 8140225031);

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint(10) NOT NULL,
  `app_name` varchar(30) NOT NULL,
  `downloads` bigint(10) NOT NULL,
  `ratings` float DEFAULT NULL,
  `purpose` varchar(20) DEFAULT 'Entertainment',
  `dev_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `app_name`, `downloads`, `ratings`, `purpose`, `dev_by`) VALUES
(1, 'Netflix', 222, 4.6, 'Entertainment', 'Reed Hastings and Marc Randolph'),
(2, 'Facebook', 210, 3.6, 'Social media', 'Mark zuckerberg'),
(3, 'Instagram', 320, 4, 'Social media', 'Kevin Systrom'),
(4, 'Chrome', 210, 4.6, 'Search engine', 'Google'),
(5, 'Youtube', 300, 4.3, 'Entertainment', 'jawed karim,steve chan and chad hurly'),
(6, 'sololearn', 12, 3.9, 'Learning', 'David kocharyan and Yeva Hyusyan'),
(7, 'Firefox', 20, 3.7, 'Search Engine', 'Blake ross'),
(8, 'Whatsapp', 300, 4.3, 'Social Media', 'Jan koum and brain acton'),
(9, 'PUBG', 204, 4.3, 'Entertainment', 'Krafton'),
(10, 'LinkedIN', 244, 4.3, 'proffessional', 'Eric ly and Allen blue');

-- --------------------------------------------------------

--
-- Table structure for table `Bank`
--

CREATE TABLE `Bank` (
  `Acc_no` bigint(100) NOT NULL,
  `Acc_Holder_Name` varchar(60) NOT NULL,
  `Acc_Balance` bigint(30) NOT NULL,
  `Acc_Type` varchar(30) NOT NULL DEFAULT 'Saving',
  `Branch` varchar(30) NOT NULL,
  `Mobile` bigint(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Bank`
--

INSERT INTO `Bank` (`Acc_no`, `Acc_Holder_Name`, `Acc_Balance`, `Acc_Type`, `Branch`, `Mobile`) VALUES
(18012011030, 'Raju', 32014, 'Saving', 'Suigam', 3652459878),
(18012011040, 'brijal', 210, 'Current', 'Tharad', 1201522665),
(18012011048, 'Jigar', 54682, 'Saving', 'Deesa', 5689321475),
(18012011051, 'Dipesh', 89562, 'Current', 'Palanpur', 8596371475),
(18012011052, 'Rahul', 12000, 'Saving', 'Wav', 8596321475),
(18012011053, 'Ghanshyam', 54000, 'Saving', 'Dhima', 9979465857),
(18012011054, 'Nidhi', 1250, 'Current', 'Dehgam', 8965342710),
(18012011055, 'Jinal', 524000, 'Saving', 'Paldi', 2301654980),
(18012011056, 'Ravi', 2100, 'Current', 'Patan', 2365419872),
(18012011057, 'Aaiqb', 55600, 'Saving', 'Paldi', 1236547890);

-- --------------------------------------------------------

--
-- Table structure for table `Doctor_record`
--

CREATE TABLE `Doctor_record` (
  `id` bigint(10) NOT NULL,
  `Dr_Name` varchar(60) NOT NULL,
  `Salary` bigint(30) NOT NULL,
  `Qualification` varchar(30) NOT NULL,
  `License_no` bigint(30) NOT NULL,
  `Mobile` bigint(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Doctor_record`
--

INSERT INTO `Doctor_record` (`id`, `Dr_Name`, `Salary`, `Qualification`, `License_no`, `Mobile`) VALUES
(1, 'A.A.khan', 65000, 'MBBS', 58654510, 8758462548),
(2, 'Rajesh', 85000, 'MD', 58659874, 6589473252),
(3, 'DR.Gadhvi', 75000, 'MBBS', 58652031, 8796325410),
(4, 'dr.vishal', 80000, 'BHMS', 12347856, 9879873210),
(5, 'dr.patel', 60000, 'MBBS', 12365014, 6355487920),
(6, 'dr.priya', 87000, 'BAMS', 321403056, 98653210),
(7, 'dr.Sachin', 65400, 'MBBS', 69581074, 8529637410),
(8, 'DR.jigar', 26000, 'MD', 23148568, 7418520963),
(9, 'Dr.Sharma', 50000, 'MBBS', 12021450, 9080806570),
(10, 'Dr.chutki', 55000, 'MD', 17893245, 9820103040);

-- --------------------------------------------------------

--
-- Table structure for table `Games`
--

CREATE TABLE `Games` (
  `Gamename` varchar(30) DEFAULT NULL,
  `teams` varchar(30) NOT NULL,
  `Gameday` date NOT NULL,
  `venue` varchar(30) NOT NULL,
  `result` varchar(30) DEFAULT 'draw',
  `result_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Games`
--

INSERT INTO `Games` (`Gamename`, `teams`, `Gameday`, `venue`, `result`, `result_date`) VALUES
('Cricekt', 'CSK vs KKR', '2022-03-26', 'Mumbai', 'Pending', '2020-03-26'),
('Kabbadi', 'Gujrat vs Hariyana', '2022-02-12', 'Gujrat', 'Gujrat won', '2022-02-12'),
('Kho-kho', 'RCB vs RPS', '2021-02-20', 'Banglore', 'RCB won', '2022-02-20'),
('Football', 'Goa vs Maharashtra', '2021-10-12', 'Delhi', 'Goa won', '2021-10-12'),
('Cricket', 'India vs Srilanka', '2022-03-15', 'Ahmedabad', 'India won', '2022-03-18'),
('Table tenis', 'Team A vs Team B', '2022-01-12', 'Gandhinagar', 'Draw', '2022-01-12'),
('Gulf', 'Ravi vs Aaqib', '2020-01-03', 'Ahmedabad', 'Draw', '2020-01-04'),
('Pool', 'Jinal vs Nidhi', '2022-03-02', 'Ahmedabad', 'Nidhi won', '2022-03-02'),
('Vollyball', 'UVPCE vs MUIS', '2022-02-27', 'Mehsana', 'UVPCE won', '2022-02-27'),
('Cricket', 'India vs Srilanka', '2022-03-19', 'Ahmedabad', 'draw', '2022-03-22');

-- --------------------------------------------------------

--
-- Table structure for table `Laptop`
--

CREATE TABLE `Laptop` (
  `Company` varchar(10) NOT NULL,
  `model` varchar(60) NOT NULL,
  `service_tag` varchar(30) NOT NULL,
  `processor` varchar(10) NOT NULL,
  `Ram` int(10) NOT NULL,
  `price` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Laptop`
--

INSERT INTO `Laptop` (`Company`, `model`, `service_tag`, `processor`, `Ram`, `price`) VALUES
('ASUS', 'vivobook 15', '1A23BD4', 'Ryzen5', 8, 60000),
('HP', 'inspiron 1400', '1G45HJX', 'i5', 8, 65000),
('DELL', 'vostro 3000', '22AS14D', 'i7', 16, 80000),
('ASUS', 'Vivobook 14', '5X90K7Y', 'i5', 24, 90000),
('LENOVO', 'vostro 3583', '7U90NH5', 'i5', 4, 39000),
('LENOVO', 'Thinkpad', '85k5Y7M', 'i5', 8, 60000),
('MI', 'vostro 3583', '85X5G7M', 'i5', 8, 60000),
('DELL', 'vostro 3583', '85X5Y7M', 'i5', 8, 60000),
('LENOVO', 'ideapad', '87X5Y7M', 'i5', 8, 60000),
('HP', 'inspiron 1500', '8S45D8F', 'Ryzen5', 12, 85000);

-- --------------------------------------------------------

--
-- Table structure for table `parking`
--

CREATE TABLE `parking` (
  `parking_lot` bigint(10) NOT NULL,
  `vehicle_type` varchar(60) NOT NULL,
  `vehicle_no` bigint(30) NOT NULL,
  `parking_time` time NOT NULL,
  `rent` bigint(10) NOT NULL,
  `rent_paid` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parking`
--

INSERT INTO `parking` (`parking_lot`, `vehicle_type`, `vehicle_no`, `parking_time`, `rent`, `rent_paid`) VALUES
(1, '4 wheeler', 8486, '10:05:00', 50, 'yes'),
(2, '2 wheeler', 4541, '10:06:00', 30, 'no'),
(3, '3 wheeler', 1254, '10:10:00', 40, 'no'),
(4, '2 wheeler', 4785, '10:26:00', 30, 'yes'),
(5, '4 wheeler', 6524, '10:21:00', 80, 'yes'),
(6, '3 wheeler', 8795, '10:54:00', 40, 'no'),
(7, '4 wheeler', 4562, '11:05:00', 100, 'yes'),
(8, '2 wheeler', 1201, '11:45:00', 30, 'no'),
(9, '4 wheeler', 8974, '12:05:00', 50, 'yes'),
(10, '2 wheeler', 3201, '12:20:00', 40, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `professors`
--

CREATE TABLE `professors` (
  `emp_id` int(10) NOT NULL,
  `pro_name` varchar(30) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `contact_num` bigint(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `professors`
--

INSERT INTO `professors` (`emp_id`, `pro_name`, `designation`, `subject`, `contact_num`) VALUES
(1, 'chirag patel', 'Assistant professor', 'Web development', 9797652412),
(2, 'Meet solnaki', 'Assistant professor', 'python', 9595656585),
(3, 'milan patel', 'professor', 'Mobile app development', 9797652412),
(4, 'vikram solnaki', 'Assistant professor', 'PHP', 9595656585),
(5, 'rahul Bajag', 'Assistant professor', 'BEE', 9797652412),
(6, 'Harshik modasiya', 'Associate professor', 'robotics', 9595656585),
(7, 'shivang bhatt', 'professor', 'automation', 9797652412),
(8, 'Sanket khandhera', 'Associate professor', 'maths', 9595656585),
(9, 'Shravan parmar', 'Assistant professor', 'physics', 9797652412),
(10, 'Pankaj rana', 'professor', 'English', 9595656585);

-- --------------------------------------------------------

--
-- Table structure for table `Singer`
--

CREATE TABLE `Singer` (
  `id` int(10) NOT NULL,
  `singer_name` varchar(50) DEFAULT NULL,
  `Country` varchar(30) NOT NULL,
  `singing_lang` varchar(30) NOT NULL,
  `famous_song` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Singer`
--

INSERT INTO `Singer` (`id`, `singer_name`, `Country`, `singing_lang`, `famous_song`) VALUES
(1, 'Alan walker', 'Norwegian', 'English', 'Faded and Alone'),
(2, 'Sawai bhat', 'indian', 'hindi-rajasthani', 'Sansein'),
(3, 'Arijit singh', 'indian', 'hindi', 'Aashiqui and tum sath ho'),
(4, 'Atif aslam', 'pakistani', 'hindi', 'Tera hone laga hoon'),
(5, 'selena gomez', 'American', 'English', 'Who says'),
(6, 'Aditya Gadhavi', 'indian', 'Gujrati', 'Mahahetvali'),
(7, 'Maroon 5', 'American', 'English', 'Memories'),
(8, 'Mohit chauhan', 'indian', 'hindi', 'Khali salam dua'),
(9, 'Osman mir', 'indian', 'hindi-Gujarati', 'mor bani thangat kare'),
(10, 'imagine dragon', 'American', 'English', 'Beliver');

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `store_id` int(10) NOT NULL,
  `store_name` varchar(30) NOT NULL,
  `phone` bigint(30) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `Address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`store_id`, `store_name`, `phone`, `email`, `Address`) VALUES
(1, 'Phonevala', 6585745120, 'phonevala@gmail.com', 'Mehsana'),
(2, 'Casino fashion world', 8546285013, 'casino@gmail.com', 'Palanpur'),
(3, 'Adarsh book store', 6532124585, 'Adarshbook@gmail.com', 'Palanpur'),
(4, 'chehar tea stall', 6355224851, 'chehartea@gmail.com', 'Palanpur'),
(5, 'Radhe mobile', 8758399651, 'mobileradhe@gmail.com', 'Tharad'),
(6, 'world inbox boook depo', 6585859595, 'worldinbox@gmail.com', 'Gandhinagar'),
(7, 'Lajwab soda soap', 6355221144, 'abdullajwab@gmail.com', 'mumbai'),
(8, 'Gada electronics', 9898746520, 'gadaele@gmail.com', 'mumbai'),
(9, 'Shreeji sweet shop', 6895858564, 'shreejisweet@gmail.com', 'Visnagar'),
(10, 'prakash Khaman', 9898700520, 'prakash.khaman@gmail.com', 'visnagar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admission`
--
ALTER TABLE `Admission`
  ADD PRIMARY KEY (`form_no`),
  ADD UNIQUE KEY `Mobile` (`Mobile`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Bank`
--
ALTER TABLE `Bank`
  ADD PRIMARY KEY (`Acc_no`),
  ADD UNIQUE KEY `Mobile` (`Mobile`);

--
-- Indexes for table `Doctor_record`
--
ALTER TABLE `Doctor_record`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Mobile` (`Mobile`);

--
-- Indexes for table `Laptop`
--
ALTER TABLE `Laptop`
  ADD UNIQUE KEY `service_tag` (`service_tag`);

--
-- Indexes for table `parking`
--
ALTER TABLE `parking`
  ADD PRIMARY KEY (`parking_lot`),
  ADD UNIQUE KEY `vehicle_no` (`vehicle_no`);

--
-- Indexes for table `professors`
--
ALTER TABLE `professors`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `Singer`
--
ALTER TABLE `Singer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `singer_name` (`singer_name`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`store_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Admission`
--
ALTER TABLE `Admission`
  MODIFY `form_no` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `parking`
--
ALTER TABLE `parking`
  MODIFY `parking_lot` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `professors`
--
ALTER TABLE `professors`
  MODIFY `emp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Singer`
--
ALTER TABLE `Singer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `store_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
