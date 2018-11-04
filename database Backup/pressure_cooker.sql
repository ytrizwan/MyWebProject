-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2018 at 07:12 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pressure_cooker`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `behindscenes`
--

CREATE TABLE `behindscenes` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `img` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `behindscenes`
--

INSERT INTO `behindscenes` (`id`, `name`, `img`, `date`, `msg`) VALUES
(10, 'BehindScense', 'HoaDinh-pressurecook-0882.jpg', '2018-10-24 02:47:38', 'BehindScenseBehindScense'),
(11, 'BehindScense', 'HoaDinh-pressurecook-0897.jpg', '2018-10-24 02:48:01', 'BehindScenseBehindScense'),
(12, 'BehindScense', 'HoaDinh-pressurecook-0917.jpg', '2018-10-24 02:48:07', 'BehindScenseBehindScense'),
(13, 'BehindScense', 'IP_ChrisFernance_PC_3.jpg', '2018-10-24 02:48:15', 'BehindScenseBehindScense'),
(14, 'BehindScense', 'IP_ChrisFernance_PC_3.jpg', '2018-10-24 02:48:21', 'BehindScenseBehindScense'),
(15, 'BehindScense', 'IP_ChrisFernance_PC_5.jpg', '2018-10-24 02:48:28', 'BehindScenseBehindScense'),
(16, 'BehindScense', 'IP_ChrisFernance_PC_6.jpg', '2018-10-24 02:48:34', 'BehindScenseBehindScense'),
(17, 'BehindScense', 'Maria Koulouris_Pressure Cooker.jpg', '2018-10-24 02:48:41', 'BehindScenseBehindScense'),
(18, 'BehindScense', 'Maria Koulouris_Pressure Cooker-3.jpg', '2018-10-24 02:48:47', 'BehindScenseBehindScense'),
(19, 'BehindScense', 'Maria Koulouris_Pressure Cooker-5.jpg', '2018-10-24 02:49:02', 'BehindScenseBehindScense'),
(21, 'BehindScense', 'Maria Koulouris_Pressure Cooker-9.jpg', '2018-11-02 06:03:00', 'BehindScenseBehindScense');

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `id` int(10) NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL,
  `img3` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `etc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`id`, `img1`, `img2`, `img3`, `date`, `etc`) VALUES
(10, 'Maria Koulouris_Pressure Cooker-13.jpg', 'IP_ChrisFernance_PC_7.jpg', 'IP_ChrisFernance_PC_2.jpg', '2018-10-24 02:20:23', '');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `msg` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `msg`, `date`) VALUES
(3, 'sdf', 'phone.asim@gmail.com', 'vzxvxzcv', '2018-10-24 03:12:27');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `img` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `img`, `date`, `msg`) VALUES
(13, 'MyTeam', 'Maria Koulouris_Pressure Cooker-2.jpg', '2018-10-24 02:40:51', 'Method. Combine the flour and salt in a large bowl. Make a well in the centre. Shape each dough portion into a ball. Use a lightly floured rolling pin to roll out 1 portion of dough to a 20cm-diameter disc. Place a deep, heavy-based frying pan over medium-high heat and brush with a little oil.'),
(14, 'MyTeam', 'HoaDinh-pressurecook-0948.jpg', '2018-10-24 02:41:02', 'Method. Combine the flour and salt in a large bowl. Make a well in the centre. Shape each dough portion into a ball. Use a lightly floured rolling pin to roll out 1 portion of dough to a 20cm-diameter disc. Place a deep, heavy-based frying pan over medium-high heat and brush with a little oil.'),
(15, 'MyTeam', 'HoaDinh-pressurecook-0974.jpg', '2018-10-24 02:41:10', 'Method. Combine the flour and salt in a large bowl. Make a well in the centre. Shape each dough portion into a ball. Use a lightly floured rolling pin to roll out 1 portion of dough to a 20cm-diameter disc. Place a deep, heavy-based frying pan over medium-high heat and brush with a little oil.'),
(16, 'MyTeam', 'HoaDinh-pressurecook-1022.jpg', '2018-10-24 02:41:18', 'Method. Combine the flour and salt in a large bowl. Make a well in the centre. Shape each dough portion into a ball. Use a lightly floured rolling pin to roll out 1 portion of dough to a 20cm-diameter disc. Place a deep, heavy-based frying pan over medium-high heat and brush with a little oil.'),
(17, 'MyTeam', 'Maria Koulouris_Pressure Cooker-2.jpg', '2018-10-24 02:41:30', 'Method. Combine the flour and salt in a large bowl. Make a well in the centre. Shape each dough portion into a ball. Use a lightly floured rolling pin to roll out 1 portion of dough to a 20cm-diameter disc. Place a deep, heavy-based frying pan over medium-high heat and brush with a little oil.'),
(18, 'MyTeam', 'Maria Koulouris_Pressure Cooker-4.jpg', '2018-10-24 02:42:08', 'Method. Combine the flour and salt in a large bowl. Make a well in the centre. Shape each dough portion into a ball. Use a lightly floured rolling pin to roll out 1 portion of dough to a 20cm-diameter disc. Place a deep, heavy-based frying pan over medium-high heat and brush with a little oil.'),
(19, 'Pakistan', 'Maria Koulouris_Pressure Cooker-6.jpg', '2018-10-24 02:42:21', 'Method. Combine the flour and salt in a large bowl. Make a well in the centre. Shape each dough portion into a ball. Use a lightly floured rolling pin to roll out 1 portion of dough to a 20cm-diameter disc. Place a deep, heavy-based frying pan over medium-high heat and brush with a little oil.'),
(20, 'Rizwan', 'Maria Koulouris_Pressure Cooker-12.jpg', '2018-10-24 02:42:32', 'Method. Combine the flour and salt in a large bowl. Make a well in the centre. Shape each dough portion into a ball. Use a lightly floured rolling pin to roll out 1 portion of dough to a 20cm-diameter disc. Place a deep, heavy-based frying pan over medium-high heat and brush with a little oil.');

-- --------------------------------------------------------

--
-- Table structure for table `judges`
--

CREATE TABLE `judges` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `img` text NOT NULL,
  `msg` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `etc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `judges`
--

INSERT INTO `judges` (`id`, `name`, `img`, `msg`, `date`, `etc`) VALUES
(40, 'Colin', 'colin.jpg', 'Hi, I am here to Judge.', '2018-10-24 02:22:20', ''),
(41, 'Manu', 'manu.jpg', 'Hi, I am here to Observe.', '2018-10-24 02:22:51', ''),
(42, 'Pete', 'pete-evans.jpg', 'Hi, This is Pete to look every Dish.', '2018-10-24 02:24:28', ''),
(43, 'Group', 'myJudges01.png', 'We judge as a Group.', '2018-10-24 02:25:40', ''),
(44, 'Colin', 'colin.jpg', 'Hi, I am here to Judge.', '2018-10-24 02:22:20', ''),
(45, 'Manu', 'manu.jpg', 'Hi, I am here to Observe.', '2018-10-24 02:22:51', ''),
(46, 'Pete', 'pete-evans.jpg', 'Hi, This is Pete to look every Dish.', '2018-10-24 02:24:28', ''),
(47, 'Group', 'myJudges01.png', 'We judge as a Group.', '2018-10-24 02:25:40', '');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `video` text NOT NULL,
  `msg` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `etc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `name`, `video`, `msg`, `date`, `etc`) VALUES
(6, 'Sag', 'Hjj5GkavZro', 'Set the spinach aside. Place the onions, garlic and ginger into the pan; fry over medium heat, stirring frequently, until lightly browned, about 10 minutes. Pour in the passata, ground coriander, cayenne pepper, turmeric, cardamom, cloves and salt; stir in 1 tablespoon water; cook, stirring frequently, for 10 minutes', '2018-10-24 02:39:01', ''),
(7, 'Roti', 'ASLPnvQk5b0', 'Method. Combine the flour and salt in a large bowl. Make a well in the centre. Shape each dough portion into a ball. Use a lightly floured rolling pin to roll out 1 portion of dough to a 20cm-diameter disc. Place a deep, heavy-based frying pan over medium-high heat and brush with a little oil.', '2018-10-24 02:40:16', '');

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `img` text NOT NULL,
  `msg` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `etc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `name`, `img`, `msg`, `date`, `etc`) VALUES
(8, 'Bla Bla Bla', 'mkr9_ep49_ae_2nd-course_jamon-wrapped-lamb-brains-with-caper-mayonnaise-2.jpg', 'Place apple, vinegar and honey in a small food processor and process until smooth. Add oil and mustard and pulse until combined. Season to taste, stir in chives and serve.', '2018-10-24 02:30:38', ''),
(9, 'Sag', 'mkr9_ep49_ae_4th-course_pork-belly-with-sprouts-apple-and-calvados-sauce-2.jpg', 'A salad of flaked salmon, steamed small potatoes and snow pea shoots hold this piquant dressing well.', '2018-10-24 02:31:36', ''),
(11, 'Bla Bla Bla', 'mkr9_ep49_ae_2nd-course_jamon-wrapped-lamb-brains-with-caper-mayonnaise-2.jpg', 'Place apple, vinegar and honey in a small food processor and process until smooth. Add oil and mustard and pulse until combined. Season to taste, stir in chives and serve.', '2018-10-24 02:30:38', ''),
(12, 'Sag', 'mkr9_ep49_ae_4th-course_pork-belly-with-sprouts-apple-and-calvados-sauce-2.jpg', 'A salad of flaked salmon, steamed small potatoes and snow pea shoots hold this piquant dressing well.', '2018-10-24 02:31:36', ''),
(13, 'Bla Bla Bla', 'mkr9_ep49_ae_2nd-course_jamon-wrapped-lamb-brains-with-caper-mayonnaise-2.jpg', 'Place apple, vinegar and honey in a small food processor and process until smooth. Add oil and mustard and pulse until combined. Season to taste, stir in chives and serve.', '2018-10-24 02:30:38', ''),
(14, 'Sag', 'mkr9_ep49_ae_4th-course_pork-belly-with-sprouts-apple-and-calvados-sauce-2.jpg', 'A salad of flaked salmon, steamed small potatoes and snow pea shoots hold this piquant dressing well.', '2018-10-24 02:31:36', ''),
(15, 'Bla Bla Bla', 'mkr9_ep49_ae_2nd-course_jamon-wrapped-lamb-brains-with-caper-mayonnaise-2.jpg', 'Place apple, vinegar and honey in a small food processor and process until smooth. Add oil and mustard and pulse until combined. Season to taste, stir in chives and serve.', '2018-10-24 02:30:38', ''),
(16, 'Sag', 'mkr9_ep49_ae_4th-course_pork-belly-with-sprouts-apple-and-calvados-sauce-2.jpg', 'A salad of flaked salmon, steamed small potatoes and snow pea shoots hold this piquant dressing well.', '2018-10-24 02:31:36', '');

-- --------------------------------------------------------

--
-- Table structure for table `sponsor`
--

CREATE TABLE `sponsor` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `img` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sponsor`
--

INSERT INTO `sponsor` (`id`, `name`, `img`, `date`, `msg`) VALUES
(7, 'Sponsor', '0008-2.jpg', '2018-10-24 02:43:24', 'First Sponser'),
(8, 'Sponsor', 'a3EhqOqy_400x400.jpg', '2018-10-24 02:43:56', 'First Sponsor'),
(9, 'Sponsor', 'buyfreshbuylocal.jpg', '2018-10-24 02:44:06', 'First Sponsor'),
(10, 'Sponsor', 'Food Waste Infographic shareable.jpg', '2018-10-24 02:44:19', 'First Sponsor'),
(11, 'Sponsor', 'images.png', '2018-10-24 02:44:32', 'First Sponsor'),
(12, 'Sponsor', 'kids-badminton-championship-thumbanail-copy.jpg', '2018-10-24 02:44:41', 'First Sponsor'),
(13, 'Sponsor', 'proj150_descriptionsimg_20180621020536.png', '2018-10-24 02:44:50', 'First Sponsor'),
(14, 'Sponsor', 'Sargents-Logo1-e1435813100893.jpg', '2018-10-24 02:45:20', 'First Sponsor');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `img` text NOT NULL,
  `msg` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `vote` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `img`, `msg`, `date`, `vote`) VALUES
(7, 'Jessemma Colourlandscape', '5a581a96e1484_616mkr9_group1_jessemma_colourlandscape.jpg', 'We love to cook. We are here to Serve.', '2018-10-29 15:14:54', 18),
(8, 'Davidemarco Colourlandscape', '5a5822fd52bd2_831mkr9_group2_davidemarco_colourlandscape.jpg', 'We are going to Win.', '2018-10-30 22:23:02', 8),
(9, 'Mattaly Colourlandscape', '5a582551ac3ed_608mkr9_group2_mattaly_colourlandscape (1).jpg', 'We are best Team.', '2018-10-30 22:51:57', 9),
(10, 'Jessemma Colourlandscape', '5a581a96e1484_616mkr9_group1_jessemma_colourlandscape.jpg', 'We love to cook. We are here to Serve.', '2018-10-24 02:50:41', 5),
(11, 'Davidemarco Colourlandscape', '5a5822fd52bd2_831mkr9_group2_davidemarco_colourlandscape.jpg', 'We are going to Win.', '2018-10-24 02:50:45', 40),
(12, 'Mattaly Colourlandscape', '5a582551ac3ed_608mkr9_group2_mattaly_colourlandscape (1).jpg', 'We are best Team.', '2018-10-24 02:50:49', 9);

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `id` int(50) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`id`, `email`) VALUES
(3, 'phone.asim@gmail.com'),
(4, 'chrizwan@rocketmail.com'),
(5, 'andrew.s.jarrett1@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `behindscenes`
--
ALTER TABLE `behindscenes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `judges`
--
ALTER TABLE `judges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `behindscenes`
--
ALTER TABLE `behindscenes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `judges`
--
ALTER TABLE `judges`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sponsor`
--
ALTER TABLE `sponsor`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
