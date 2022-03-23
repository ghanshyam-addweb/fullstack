-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 23, 2022 at 02:17 PM
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
-- Database: `Demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `Books`
--

CREATE TABLE `Books` (
  `id` bigint(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Author` varchar(30) NOT NULL,
  `type` varchar(20) NOT NULL,
  `price` int(10) NOT NULL,
  `Availability` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Books`
--

INSERT INTO `Books` (`id`, `Name`, `Author`, `type`, `price`, `Availability`) VALUES
(1, 'one indian girl', 'Chetan bhagat', 'story ', 450, 'online and offline'),
(2, 'Half Girlfriend', 'Chetan bhagat', 'Story', 500, 'online and offline'),
(3, '2 states', 'Chetan bhagat', 'novel', 650, 'online'),
(4, 'the girl in room 105', 'chetan bhagat', 'novel', 700, 'online and offline'),
(5, 'One arranged murder', 'chetan bhagat', 'story', 560, 'online and offline'),
(6, 'Harry potter', 'J.K. Rowling', 'novel', 800, 'online '),
(7, 'India’s 71-Year Test: The Journey to Triumph in Australia', 'R.Kaushik', 'historical fiction', 590, 'online and offline'),
(8, 'Believe-What Life and Cricket Taught Me', 'Suresh Raina', 'biography', 350, 'online'),
(9, 'The Christmas Pig', 'J.K. Rowling', 'story', 560, 'online and offline'),
(10, '400 Days', 'Chetan Bhagat', 'novel', 650, 'online and offline');

-- --------------------------------------------------------

--
-- Table structure for table `Bus booking`
--

CREATE TABLE `Bus booking` (
  `bus no` varchar(30) NOT NULL,
  `booking id` bigint(20) NOT NULL,
  `source` varchar(50) NOT NULL,
  `Destination` varchar(50) NOT NULL,
  `Seat no` int(10) NOT NULL,
  `Amount` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Bus booking`
--

INSERT INTO `Bus booking` (`bus no`, `booking id`, `source`, `Destination`, `Seat no`, `Amount`) VALUES
('GJ-18 XY-1420', 5, 'Gita mandir-Ahmedabad', 'Tharad]', 15, 147),
('GJ-18 XY-1420', 8, 'incomeTax-Ahmedabad', 'patan', 12, 185),
('GJ-18 XY-2875', 8, 'Old wadaj-Ahmedabad', 'Baroda', 10, 540),
('GJ-18 XY-2025', 24, 'Paldi-Ahmedabad', 'Deesa', 5, 120),
('GJ-18 XY-2768', 75, 'Ranip-Ahmedabad', 'Palanpur', 20, 140),
('GJ-18 XY-1224', 45, 'Gitamandir-Ahmedabad', 'Mehsana', 18, 89),
('GJ-18 XY-2754', 14, 'V.s.hospital-Ahmedabad', 'Tharad', 2, 184),
('GJ-18 XY-2000', 456, 'Old wadaj-Ahmedabad', 'surat', 11, 780),
('GJ-18 XY-4526', 10, 'Gita mandir-Ahmedabad', 'Rajkot', 7, 466),
('GJ-18 XY-2111', 75, 'Gita mandir-Ahmedabad', 'Suigam', 22, 522);

-- --------------------------------------------------------

--
-- Table structure for table `city name`
--

CREATE TABLE `city name` (
  `id` bigint(10) NOT NULL,
  `city name` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `Pin code` bigint(10) NOT NULL,
  `Famous place` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city name`
--

INSERT INTO `city name` (`id`, `city name`, `state`, `country`, `Pin code`, `Famous place`) VALUES
(1, 'Ahmedabad', 'Gujarat', 'India', 586458, 'Laldarwaja, Tri-mandir'),
(2, 'visnagar', 'Gujarat', 'India', 384015, 'mirabai tower'),
(3, 'Mehsana', 'Gujarat', 'India', 384012, 'lions hospital'),
(4, 'jaipur', 'Rajasthan', 'india', 302001, 'Hawa mahal'),
(5, 'Agra', 'Uttarpradesh', 'India', 223007, 'Taj Mahal'),
(6, 'surat', 'Gujarat', 'india', 335009, 'Dumas beach'),
(7, 'Sanchor', 'Rajasthan', 'india', 343041, 'Sundhamata Temple'),
(8, 'udaipur', 'Rajasthan', 'india', 584666, 'Bagore ki Haweli Museaum'),
(9, 'Palanpurf', 'Gujrat', 'india', 384213, 'Banas dairy, Pataleshwar Mahadev temple'),
(10, 'Suigam', 'Gujrat', 'india', 385570, 'Nadabet temple and indo-pak border');

-- --------------------------------------------------------

--
-- Table structure for table `Employee`
--

CREATE TABLE `Employee` (
  `id` bigint(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Joining Year` year(4) NOT NULL,
  `Salary` bigint(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Mo no` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Employee`
--

INSERT INTO `Employee` (`id`, `Name`, `Joining Year`, `Salary`, `Address`, `Mo no`) VALUES
(1, 'Ghanshyam', 2022, 20000, 'Tharad', 9879946585),
(2, 'Aaqib', 2022, 20000, 'Ahmedabad', 985654785),
(3, 'Ravi', 2022, 20000, 'Patan', 9856585475),
(4, 'Jinal', 2022, 20000, 'Ahmedabad', 9985455555),
(5, 'Nidhi', 2022, 20000, 'Dehgam', 6352419685),
(6, 'Shashank', 2022, 20000, 'Jaipur', 8596748565),
(7, 'Mukul', 2022, 20000, 'Jaipur', 8596789658),
(8, 'Akash', 2022, 20000, 'Jaipur', 6935156285),
(9, 'Himanshu', 2022, 20000, 'Jaipur', 6355448652),
(10, 'Jatin', 2022, 20000, 'Jaipur', 8565958574);

-- --------------------------------------------------------

--
-- Table structure for table `Hospital`
--

CREATE TABLE `Hospital` (
  `Patient id` bigint(10) NOT NULL,
  `patient name` varchar(30) NOT NULL,
  `Doctor name` varchar(30) NOT NULL,
  `ward no` int(10) NOT NULL,
  `admit date` date NOT NULL,
  `disease` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Hospital`
--

INSERT INTO `Hospital` (`Patient id`, `patient name`, `Doctor name`, `ward no`, `admit date`, `disease`) VALUES
(1, 'Ramesh', 'DR. A.A.khan', 4, '2022-02-02', 'Stomach ache'),
(3, 'hitesh', 'Dr.Suresh', 18, '2022-02-15', 'Accident'),
(4, 'Laxman', 'Dr.Ayush', 10, '2022-02-18', 'cold'),
(5, 'piyush', 'Dr.Gadhvi', 5, '2022-02-19', 'Dierrhea'),
(6, 'Raju', 'Dr.Salunke', 10, '2022-03-10', 'Snake bite'),
(7, 'Brijal', 'Dr.bhatt', 7, '2022-03-20', 'Headache'),
(2, 'anil', 'Dr. rajesh', 1, '2021-03-15', 'Fever'),
(8, 'Pravin', 'Dr.bhatt', 12, '2022-03-20', 'stomach ache'),
(9, 'Brijal', 'Dr.bhatt', 10, '2022-03-23', 'cold and flu'),
(10, 'Brijal', 'Dr.bhatt', 9, '2022-03-24', 'Headache');

-- --------------------------------------------------------

--
-- Table structure for table `Mobile`
--

CREATE TABLE `Mobile` (
  `id` bigint(10) NOT NULL,
  `Company Name` varchar(20) NOT NULL,
  `Camera` varchar(20) NOT NULL,
  `Battery` bigint(10) NOT NULL,
  `Touch` varchar(20) NOT NULL,
  `warranty` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Mobile`
--

INSERT INTO `Mobile` (`id`, `Company Name`, `Camera`, `Battery`, `Touch`, `warranty`) VALUES
(1, 'Oppo', 'dual', 4500, 'yes', 2),
(2, 'vivo', 'tripple camera', 6000, 'yes', 2),
(3, 'apple', 'dual', 5000, 'yes', 1),
(4, 'Nokia', 'no', 1600, 'no', 2),
(5, 'redmi', 'dual', 4500, 'yes', 2),
(6, 'realme', 'single', 3500, 'yes', 1),
(7, 'motorola', 'dual', 4000, 'yes', 2),
(8, 'Samsung', 'four camera', 6000, 'yes', 2),
(9, 'Lava', 'Single', 4000, 'yes', 2),
(10, 'one plus', 'dual', 6000, 'yes', 2);

-- --------------------------------------------------------

--
-- Table structure for table `name`
--

CREATE TABLE `name` (
  `id` bigint(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` int(10) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `name`
--

INSERT INTO `name` (`id`, `name`, `email`, `age`, `mobile`, `address`) VALUES
(1, 'Ghanshyam Pandya', 'ghanshyam@gmail.com', 22, 8401112560, 'Baluntri, Wav, B.K.'),
(2, 'Aaqib Shaikh', 'Aaqib@gmail.com', 22, 1236547890, 'Ahmedabad'),
(3, 'Ravi Vaghela', 'ravi@gmail.com', 23, 3216549870, 'Patan'),
(4, 'Jinal Shah', 'jinal@gmail.com', 23, 9876541230, 'Ahmedabad'),
(5, 'Nidhi jain', 'nidhi@gmail.com', 22, 8529637410, 'Dehgam'),
(6, 'Rahul Pandya', 'ragulpandya@gmail.com', 17, 8564253120, 'Visnagar'),
(7, 'Dipak Pandya', 'dipak@gmail.com', 17, 8475963250, 'Visnagar'),
(8, 'shailesh Pandya', 'sp7718@gmail.com', 26, 8758403565, 'Rapar'),
(9, 'bharat pandya', 'bharat@gmail.com', 25, 9662358465, 'Gandhinagar'),
(10, 'Suresh pandya', 'suresh@gmail.com', 28, 9856525615, 'Baluntri');

-- --------------------------------------------------------

--
-- Table structure for table `Order`
--

CREATE TABLE `Order` (
  `orderid` bigint(10) NOT NULL,
  `CustomerId` bigint(10) NOT NULL,
  `status` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` bigint(10) NOT NULL,
  `ship-postal-code` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Order`
--

INSERT INTO `Order` (`orderid`, `CustomerId`, `status`, `quantity`, `price`, `ship-postal-code`) VALUES
(15, 441, 'pending', 2, 5480, 385575),
(5, 45, 'shiped', 5, 4501, 856420),
(52, 245, 'shiped', 1, 250, 340125),
(54, 52, 'pending', 1, 520, 340124),
(1, 2, 'delivered', 2, 350, 385575),
(8, 5, 'packed and ready to ship', 2, 3620, 384012),
(9, 41, 'shiped', 1, 250, 384515),
(10, 120, 'delivered', 5, 7850, 384515),
(52, 541, 'shiped', 2, 450, 385570),
(206, 185, 'Packed', 4, 2510, 558460);

-- --------------------------------------------------------

--
-- Table structure for table `PG Accommodation`
--

CREATE TABLE `PG Accommodation` (
  `id` bigint(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Area` varchar(50) NOT NULL,
  `city` varchar(10) NOT NULL,
  `Rent` bigint(10) NOT NULL,
  `Services` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `PG Accommodation`
--

INSERT INTO `PG Accommodation` (`id`, `Name`, `Area`, `city`, `Rent`, `Services`) VALUES
(1, 'Annapurna PG', 'Navrangpura', 'Ahmedabad', 7500, 'tea-breakfast, food, laundry, Ac, wi-fi'),
(2, 'Elite PG', 'LAW GARDEN', 'Ahmedabad', 9000, 'tea-breakfast, food, laundry, Ac, wi-fi'),
(3, 'Green PG', 'Law garden', 'Ahmedabad', 7500, 'tea-breakfast, food, laundry, Ac, wi-fi'),
(4, 'Santosh PG', 'Navrangpura', 'Ahmedabad', 8000, 'tea-breakfast, food, laundry, Ac, wi-fi'),
(5, 'swastik pg', 'Law garden', 'Ahmedabad', 8500, 'tea-breakfast, food, laundry, Ac, wi-fi'),
(6, 'Nest comfort girls pg', 'vastrapur', 'Ahmedabad', 9500, 'Wi-fi, Laundry, tea-breakfast, food, A.C. '),
(7, 'staywell pg', 'Thaltez', 'Ahmedabad', 8500, 'Wi-fi, Laundry, tea-breakfast, food, A.C.'),
(8, 'stanzaa leaving', 'Vastrapur', 'Ahmedabad', 12500, 'Wi-fi, Laundry, tea-breakfast, food, A.C., Game zone '),
(9, 'Navkar PG', 'vastrapur', 'Ahmedabad', 6500, 'Wi-fi, Laundry, tea-breakfast, food'),
(10, 'happy living pg', 'Iscon ', 'Ahmedabad', 7000, 'Wi-fi, Laundry, tea-breakfast, food, A.C.\r\n'),
(6, 'Nest comfort girls pg', 'vastrapur', 'Ahmedabad', 9500, 'Wi-fi, Laundry, tea-breakfast, food, A.C. '),
(7, 'staywell pg', 'Thaltez', 'Ahmedabad', 8500, 'Wi-fi, Laundry, tea-breakfast, food, A.C.'),
(8, 'stanzaa leaving', 'Vastrapur', 'Ahmedabad', 12500, 'Wi-fi, Laundry, tea-breakfast, food, A.C., Game zone '),
(9, 'Navkar PG', 'vastrapur', 'Ahmedabad', 6500, 'Wi-fi, Laundry, tea-breakfast, food'),
(10, 'happy living pg', 'Iscon ', 'Ahmedabad', 7000, 'Wi-fi, Laundry, tea-breakfast, food, A.C.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `Student`
--

CREATE TABLE `Student` (
  `id` bigint(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roll no` bigint(10) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `college` varchar(50) NOT NULL,
  `mo no` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Student`
--

INSERT INTO `Student` (`id`, `name`, `roll no`, `branch`, `college`, `mo no`) VALUES
(1, 'Ghanshyam Pandya', 53, 'CE', 'U. V. patel college of engineering', 9879465857),
(2, 'Dipak Pandya', 12, 'CIvil', 'S.K. Patle university', 7865453215),
(3, 'Meet Parmar', 45, 'CE', 'uvpce', 9547426585),
(4, 'Sanket Khandhera', 5, 'Electrical', 'Uvpce', 9745685215),
(5, 'Pankaj Rana', 24, 'B.A.', 'V.M. patel institute', 6355487520),
(6, 'yash pate', 25, 'Bsc', 'MUIS', 8562354188),
(7, 'Jashvant Pandya', 54, 'BBA', 'GLS ', 7621235945),
(8, 'Shailesh Pandya', 36, 'B.com', 'New L.J.', 8758403562),
(9, 'Dipesh Galsar', 78, 'B.Ed.', 'Vidhyamandir Palanpur', 8758399553),
(10, 'Navin Bhatiya', 95, 'BSC', 'G.D. Modi', 9510371920);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
