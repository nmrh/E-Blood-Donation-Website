-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2020 at 06:50 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eblood`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_quantity`
--

CREATE TABLE `blood_quantity` (
  `id` int(255) NOT NULL,
  `hospital_id` int(255) NOT NULL,
  `Ap` varchar(255) NOT NULL,
  `Am` varchar(255) NOT NULL,
  `Bp` varchar(255) NOT NULL,
  `Bm` varchar(255) NOT NULL,
  `Op` varchar(255) NOT NULL,
  `Om` varchar(255) NOT NULL,
  `ABp` varchar(255) NOT NULL,
  `ABm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_quantity`
--

INSERT INTO `blood_quantity` (`id`, `hospital_id`, `Ap`, `Am`, `Bp`, `Bm`, `Op`, `Om`, `ABp`, `ABm`) VALUES
(1, 1, '3', '4', '5', '5', '6', '23', '54', '23'),
(2, 20, '.12.', '.12.', '.12.', '.12.', '.12.', '.12.', '.12.', '.12.'),
(3, 22, '12', '45', '65', '87', '56', '87', '87', '34'),
(4, 31, '54', '54', '54', '54', '54', '54', '54', '54');

-- --------------------------------------------------------

--
-- Stand-in structure for view `donate-users`
-- (See below for the actual view)
--
CREATE TABLE `donate-users` (
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `donate_view`
-- (See below for the actual view)
--
CREATE TABLE `donate_view` (
`name` varchar(255)
,`address` varchar(255)
,`email` varchar(255)
,`mobile1` varchar(13)
,`mobile2` varchar(13)
,`gender` char(6)
,`blood_type` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hos_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hos_id`, `user_id`, `username`, `password1`) VALUES
(1, 28, 'er', '818f9c45cfa30eeff277ef38bcbe9910'),
(4, 21, 'er', 'er'),
(6, 31, 'oi', 'a2e63ee01401aaeca78be023dfbb8c59'),
(7, 33, 'w', 'f1290186a5d0b1ceab27f4e77c0c5d68'),
(8, 34, 'rr', '514f1b439f404f86f77090fa9edc96ce'),
(9, 22, 'colombo', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Stand-in structure for view `hos_quan`
-- (See below for the actual view)
--
CREATE TABLE `hos_quan` (
`name` varchar(255)
,`address` varchar(255)
,`email` varchar(255)
,`mobile1` varchar(13)
,`mobile2` varchar(13)
,`Ap` varchar(255)
,`Am` varchar(255)
,`Bp` varchar(255)
,`Bm` varchar(255)
,`Op` varchar(255)
,`Om` varchar(255)
,`ABp` varchar(255)
,`ABm` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `blood_type` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `date` date NOT NULL,
  `Accept` tinyint(1) DEFAULT NULL,
  `accept_user` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `subject`, `content`, `blood_type`, `name`, `mobile`, `date`, `Accept`, `accept_user`) VALUES
(8, 'dff', ' ggg', 'AB-positive', 'bbb', '988', '2020-02-26', 1, NULL),
(9, 'ggg', ' ggg', 'A-positive', 'hhhh', '766', '2020-02-19', 1, NULL),
(10, 'jjjj', ' lllll', 'AB-positive', 'd', '6666', '2020-02-05', 1, NULL),
(11, 'oi', ' oi', 'B-positive', 'aaa', '111', '2020-02-05', 1, NULL),
(12, 'rrr', ' rrr', 'Select blood type', 'rrr', '0719089881', '2020-02-10', 1, NULL),
(13, 'rrr', ' rrr', 'Select blood type', 'rrr', '0719089881', '2020-02-10', 1, NULL),
(14, 'emergency', ' need', 'A-positive', 'perera', '345', '2020-02-18', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `gender` char(6) NOT NULL,
  `blood_type` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `nic` int(13) NOT NULL,
  `weight` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `user_id`, `gender`, `blood_type`, `dob`, `nic`, `weight`) VALUES
(4, 23, 'female', 'B-positive', '2020-02-06', 555, '54'),
(7, 26, 'female', 'B-positive', '2020-01-31', 1, '1'),
(9, 32, 'male', 'A-positive', '2020-02-01', 555, '45');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(4) NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'hospital'),
(2, 'donor'),
(3, 'patients');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile1` varchar(13) NOT NULL,
  `mobile2` varchar(13) DEFAULT NULL,
  `role_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `address`, `email`, `mobile1`, `mobile2`, `role_id`) VALUES
(1, 'genaral', 'badulla', 'ad@gmail.com', '123456', '654321', 1),
(4, '1', '1899', '11', '123', '456', 1),
(20, 'fgh', 'kj', 'accc@gmail.com', '78', '', 1),
(21, 'frt', 'ase', 'fr@gmail.com', '234', '', 1),
(22, 'abc', 'abc', 'dafew@gmail.com', '71', '0719089881', 1),
(23, 'thui', 'fff', 'dafew@gmail.com', '44', '', 2),
(26, 'rtrt', 'rtrt', 'ert@gmail.com', '071908', '46556', 2),
(27, 'ght', 'tyu', 'sss@gmail.com', '56', '', 2),
(28, 'er', 'er', 'dr@gmail.com', '71', '079881', 1),
(29, 'ert', 'ert', 'accc@gmail.com', '45', '', 1),
(30, 'oi', 'oi', 'dafeuw@gmail.com', '67', '', 1),
(31, 'oi', 'oi', 'oi@gmail.com', '56', '', 1),
(32, '45', '45', 'd4afew@gmail.com', '45', '', 2),
(33, 'w', 'w', 'hh@gmail.com', '56', '', 1),
(34, 'UY', 'TT', 'tt@gmail.com', '65', '', 1),
(35, 'aaa', 'Kappetipola Road', 'dafew@gmail.com', '01135566', '0719089881', 1);

-- --------------------------------------------------------

--
-- Structure for view `donate-users`
--
DROP TABLE IF EXISTS `donate-users`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `donate-users`  AS  select `u`.`user_id` AS `user_id`,`u`.`name` AS `name`,`u`.`address` AS `address`,`u`.`email` AS `email`,`u`.`mobile1` AS `mobile1`,`u`.`mobile2` AS `mobile2`,`u`.`username` AS `username`,`u`.`password1` AS `password1`,`u`.`role_id` AS `role_id` from (`users` `u` join `patients` `p` on(`p`.`user_id` = `u`.`user_id`)) where `u`.`role_id` = '2' ;

-- --------------------------------------------------------

--
-- Structure for view `donate_view`
--
DROP TABLE IF EXISTS `donate_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`` SQL SECURITY DEFINER VIEW `donate_view`  AS  select `u`.`name` AS `name`,`u`.`address` AS `address`,`u`.`email` AS `email`,`u`.`mobile1` AS `mobile1`,`u`.`mobile2` AS `mobile2`,`p`.`gender` AS `gender`,`p`.`blood_type` AS `blood_type` from (`users` `u` join `patients` `p` on(`u`.`user_id` = `p`.`user_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `hos_quan`
--
DROP TABLE IF EXISTS `hos_quan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`` SQL SECURITY DEFINER VIEW `hos_quan`  AS  select `u`.`name` AS `name`,`u`.`address` AS `address`,`u`.`email` AS `email`,`u`.`mobile1` AS `mobile1`,`u`.`mobile2` AS `mobile2`,`p`.`Ap` AS `Ap`,`p`.`Am` AS `Am`,`p`.`Bp` AS `Bp`,`p`.`Bm` AS `Bm`,`p`.`Op` AS `Op`,`p`.`Om` AS `Om`,`p`.`ABp` AS `ABp`,`p`.`ABm` AS `ABm` from (`users` `u` join `blood_quantity` `p` on(`u`.`user_id` = `p`.`hospital_id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_quantity`
--
ALTER TABLE `blood_quantity`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hospital_id` (`hospital_id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hos_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `accept_user` (`accept_user`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_quantity`
--
ALTER TABLE `blood_quantity`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `hos_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blood_quantity`
--
ALTER TABLE `blood_quantity`
  ADD CONSTRAINT `blood_quantity_ibfk_1` FOREIGN KEY (`hospital_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hospital`
--
ALTER TABLE `hospital`
  ADD CONSTRAINT `hospital_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notices`
--
ALTER TABLE `notices`
  ADD CONSTRAINT `notices_ibfk_1` FOREIGN KEY (`accept_user`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patients`
--
ALTER TABLE `patients`
  ADD CONSTRAINT `patients_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
