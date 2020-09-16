-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2020 at 07:55 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.1.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `expdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `chattable`
--

CREATE TABLE `chattable` (
  `username` varchar(20) NOT NULL,
  `message` varchar(200) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chattable`
--

INSERT INTO `chattable` (`username`, `message`, `time`) VALUES
('newuser', 'hi admin', '05/23/20 14.58:59<bSat, 23 May 2020 14:58:59 +0200>'),
('admin', 'hello who is this', '05/23/20 14.59:09<bSat, 23 May 2020 14:59:09 +0200>'),
('newuser', 'this is new user', '05/23/20 14.59:19<bSat, 23 May 2020 14:59:19 +0200>'),
('admin', 'how is your experience on this site', '05/23/20 14.59:36<bSat, 23 May 2020 14:59:36 +0200>'),
('newuser', 'pretty good', '05/23/20 14.59:47<bSat, 23 May 2020 14:59:47 +0200>'),
('admin', 'ok', '05/23/20 14.59:54<bSat, 23 May 2020 14:59:54 +0200>');

-- --------------------------------------------------------

--
-- Table structure for table `contacttable`
--

CREATE TABLE `contacttable` (
  `fullname` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacttable`
--

INSERT INTO `contacttable` (`fullname`, `email`, `subject`, `message`, `time`) VALUES
('aayush', 'amoldalwai1@gmail.com', 'ui improvement', 'improvent', '11/05/18 10.56:24<bMon, 05 Nov 2018 10:56:24 +0100>'),
('aayush', 'amoldalwai1@gmail.com', 'hello keep up the good work!', 'improvent', '11/05/18 17.42:18<bMon, 05 Nov 2018 17:42:18 +0100>'),
('ramesh', 'ramesh@gmail.com', 'add forum', 'suggestions', '11/06/18 11.04:19<bTue, 06 Nov 2018 11:04:19 +0100>'),
('ramesh', 'amol.dalwai@somaiya.edu', 'add more ui courses', 'suggestions', '11/07/18 7.27:35<bWed, 07 Nov 2018 07:27:35 +0100>'),
('jash', 'jash@gmail.com', 'use firebase', 'ui and design improvement', '11/08/18 18.30:19<bThu, 08 Nov 2018 18:30:19 +0100>'),
('myron', 'myron@gmail.com', 'bootstrap', 'suggestions', '11/09/18 10.46:23<bFri, 09 Nov 2018 10:46:23 +0100>'),
('luke', 'amoldalwai1@gmail.com', 'add more courses', 'improvent', '11/09/18 12.52:09<bFri, 09 Nov 2018 12:52:09 +0100>'),
('jash', 'amol.dalwai@somaiya.edu', 'nice', 'ui and design improvement', '11/10/18 8.10:28<bSat, 10 Nov 2018 08:10:28 +0100>'),
('newuser', 'newuser@gmail.com', 'increase number of courses', 'about courses', '05/23/20 9.44:12<bSat, 23 May 2020 09:44:12 +0200>');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `visit` int(100) NOT NULL,
  `id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`visit`, `id`) VALUES
(350, 0),
(176, 1),
(34, 2),
(62, 3);

-- --------------------------------------------------------

--
-- Table structure for table `exptable`
--

CREATE TABLE `exptable` (
  `fname` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exptable`
--

INSERT INTO `exptable` (`fname`, `password`, `email`) VALUES
('amol.dalwai', 'amol@1234', 'amol.dalwai@somaiya.edu'),
('aayusk.ok', 'aayush@123', 'aayush.ok@somaiya.edu'),
('aayush.ok', '1234', 'aayush'),
('aaa', 'aaaa', 'aaaaa'),
('amol', 'amol123', 'amoldalwai@gmail.com'),
('luke', 'luke', 'luke@gmail.com'),
('amit', '1234', 'amit@gmail.com'),
('myron', 'myron123', 'myron@gmail.com'),
('prajwal', 'prajwal', 'prajwal@somaiya.edu'),
('jash', 'jash', 'jash@gmail.com'),
('rahul', 'rahul', 'rahul@gmail.com'),
('aayush', '12345', 'ak@somaiya.edu'),
('newuser123', 'newuser123', 'newuser123@gmail.com'),
('user141', 'user141', 'user141@gmail.com'),
('newuser', 'newuser', 'newuser@gmail.com'),
('demoaccount', 'demoaccoun', 'demoaccount@gmail.com'),
('newaccount', 'newaccount', 'newaccount@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `paymenttable`
--

CREATE TABLE `paymenttable` (
  `fname` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `cred` varchar(30) NOT NULL,
  `coursename` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paymenttable`
--

INSERT INTO `paymenttable` (`fname`, `password`, `cred`, `coursename`, `time`) VALUES
('amol', 'amol123', '1234567', 'android', '11/08/18 13.43:02<bThu, 08 Nov 2018 13:43:02 +0100>'),
('luke', 'luke', '12321231', 'javascript', '11/08/18 13.44:08<bThu, 08 Nov 2018 13:44:08 +0100>'),
('luke', 'luke', '12345', 'java', '11/08/18 13.45:21<bThu, 08 Nov 2018 13:45:21 +0100>'),
('luke', 'luke', '1233433', 'bootstrap', '11/08/18 14.06:10<bThu, 08 Nov 2018 14:06:10 +0100>'),
('amol', 'amol123', '1234134314', 'angularjs', '11/08/18 14.09:43<bThu, 08 Nov 2018 14:09:43 +0100>'),
('myron', 'myron123', '1231343214', 'android', '11/08/18 14.11:34<bThu, 08 Nov 2018 14:11:34 +0100>'),
('jash', 'jash', '111111111', 'reactjs', '11/08/18 18.31:55<bThu, 08 Nov 2018 18:31:55 +0100>'),
('amol', 'amol123', '123456', 'java', '11/09/18 10.47:14<bFri, 09 Nov 2018 10:47:14 +0100>'),
('luke', 'luke', '12345', 'reactjs', '11/09/18 10.56:51<bFri, 09 Nov 2018 10:56:51 +0100>'),
('luke', 'luke', '12345', 'reactjs', '11/09/18 10.57:19<bFri, 09 Nov 2018 10:57:19 +0100>'),
('rahul', 'rahul', '123456', 'bootstrap', '11/10/18 8.11:47<bSat, 10 Nov 2018 08:11:47 +0100>'),
('rahul', 'rahul', '123456', 'bootstrap', '11/10/18 8.12:10<bSat, 10 Nov 2018 08:12:10 +0100>'),
('rahul', 'rahul', '123456', 'chart-js', '11/10/18 8.12:26<bSat, 10 Nov 2018 08:12:26 +0100>'),
('jash', 'jash', '1234', 'bootstrap', '11/11/18 8.00:44<bSun, 11 Nov 2018 08:00:44 +0100>'),
('jash', 'jash', '123', 'android', '11/12/18 6.24:50<bMon, 12 Nov 2018 06:24:50 +0100>'),
('jash', 'jash', '123', 'android', '11/12/18 6.33:27<bMon, 12 Nov 2018 06:33:27 +0100>'),
('jash', 'jash', '123', 'android', '11/12/18 6.34:58<bMon, 12 Nov 2018 06:34:58 +0100>'),
('jash', 'jash', '1`231231234', 'reactjs', '11/12/18 7.11:52<bMon, 12 Nov 2018 07:11:52 +0100>'),
('jash', 'jash', '123', 'reactjs', '11/12/18 7.23:44<bMon, 12 Nov 2018 07:23:44 +0100>'),
('jash', 'jash', '123456', 'reactjs', '11/12/18 7.27:16<bMon, 12 Nov 2018 07:27:16 +0100>'),
('jash', 'jash', '123333', 'android', '11/12/18 9.42:33<bMon, 12 Nov 2018 09:42:33 +0100>'),
('jash', 'jash', '123456', 'android', '11/12/18 10.31:08<bMon, 12 Nov 2018 10:31:08 +0100>'),
('aayush', '12345', '123456', 'javascript', '11/12/18 11.15:57<bMon, 12 Nov 2018 11:15:57 +0100>'),
('amol', 'amol123', '678777', 'reactjs', '11/12/18 13.06:11<bMon, 12 Nov 2018 13:06:11 +0100>'),
('amol', 'amol123', '111111', 'javascript', '11/12/18 13.20:33<bMon, 12 Nov 2018 13:20:33 +0100>'),
('amol', 'amol123', '123456', 'javascript', '05/22/20 7.04:33<bFri, 22 May 2020 07:04:33 +0200>'),
('user141', 'user141', '123456', 'javascript', '05/22/20 7.07:49<bFri, 22 May 2020 07:07:49 +0200>'),
('amol', 'amol123', '123456', 'javascript', '05/22/20 7.08:31<bFri, 22 May 2020 07:08:31 +0200>'),
('amol', 'amol123', '123456', 'javascript', '05/22/20 7.08:38<bFri, 22 May 2020 07:08:38 +0200>'),
('amol', 'amol123', '123456', 'chart-js', '05/23/20 8.32:51<bSat, 23 May 2020 08:32:51 +0200>'),
('newuser', 'newuser', '123456', 'javascript', '05/23/20 9.45:13<bSat, 23 May 2020 09:45:13 +0200>');

-- --------------------------------------------------------

--
-- Table structure for table `ratingtable`
--

CREATE TABLE `ratingtable` (
  `fname` varchar(20) NOT NULL,
  `ui` int(10) NOT NULL,
  `performance` int(10) NOT NULL,
  `design` int(10) NOT NULL,
  `usablity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ratingtable`
--

INSERT INTO `ratingtable` (`fname`, `ui`, `performance`, `design`, `usablity`) VALUES
('luke', 8, 7, 7, 6),
('luke', 10, 10, 10, 10),
('amol', 8, 3, 6, 7),
('amol', 5, 5, 5, 5),
('amol', 3, 2, 8, 9),
('luke', 6, 6, 4, 6),
('luke', 5, 5, 5, 5),
('luke', 10, 10, 10, 10),
('luke', 9, 8, 9, 10),
('luke', 10, 10, 10, 10),
('luke', 10, 10, 10, 10),
('luke', 10, 10, 10, 10),
('luke', 10, 10, 10, 10),
('jash', 10, 10, 10, 10),
('luke', 1, 1, 1, 1),
('luke', 1, 1, 1, 1),
('jash', 8, 6, 7, 7),
('jash', 8, 6, 7, 7),
('amol', 10, 10, 10, 10),
('amol', 7, 8, 9, 7),
('luke', 9, 3, 8, 4),
('amol', 7, 7, 7, 6),
('', 7, 7, 7, 6),
('rahul', 10, 10, 10, 10),
('jash', 10, 10, 9, 7),
('jash', 10, 9, 9, 9),
('jash', 10, 10, 10, 10),
('jash', 10, 10, 10, 10),
('jash', 10, 10, 10, 10),
('jash', 10, 10, 10, 10),
('jash', 9, 9, 9, 8),
('aayush', 10, 10, 10, 10),
('aayush', 10, 10, 10, 10),
('amol', 10, 10, 10, 10),
('luke', 10, 10, 10, 10),
('jash', 10, 10, 10, 10),
('jash', 10, 10, 10, 10),
('luke', 10, 10, 10, 10),
('luke', 10, 10, 10, 10),
('luke', 8, 7, 4, 7),
('luke', 8, 7, 4, 7),
('user141', 9, 8, 6, 9),
('newuser', 10, 10, 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `reviewtable`
--

CREATE TABLE `reviewtable` (
  `username` varchar(20) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviewtable`
--

INSERT INTO `reviewtable` (`username`, `comment`, `time`) VALUES
('amol.dalwai', 'add chat feature', '11/04/18 15.09:43<bSun, 04 Nov 2018 15:09:43 +0100>'),
('aayush.ok', 'good concept!', '11/04/18 15.11:48<bSun, 04 Nov 2018 15:11:48 +0100>'),
('luke', 'hello its is well built site', '11/05/18 5.40:57<bMon, 05 Nov 2018 05:40:57 +0100>'),
('luke', 'provide links and demo lectures ', '11/05/18 8.25:57<bMon, 05 Nov 2018 08:25:57 +0100>'),
('amol.dalwai', 'improve the ui', '11/05/18 8.56:35<bMon, 05 Nov 2018 08:56:35 +0100>'),
('aayush.ok', 'provide links and demo lectures ', '11/05/18 17.41:14<bMon, 05 Nov 2018 17:41:14 +0100>'),
('aayush.ok', 'good concept!', '11/06/18 6.42:32<bTue, 06 Nov 2018 06:42:32 +0100>'),
('amit', 'add chat feature', '11/07/18 7.27:01<bWed, 07 Nov 2018 07:27:01 +0100>'),
('aayush.ok', 'hello its is well built site', '11/09/18 10.46:40<bFri, 09 Nov 2018 10:46:40 +0100>'),
('rahul', 'provide links and demo lectures ', '11/10/18 8.09:47<bSat, 10 Nov 2018 08:09:47 +0100>'),
('amol.dalwai', 'improve the ui', '11/12/18 7.10:45<bMon, 12 Nov 2018 07:10:45 +0100>'),
('aayush.ok', 'improve the ui', '11/12/18 9.45:16<bMon, 12 Nov 2018 09:45:16 +0100>'),
('amol.dalwai', 'good concept!', '11/12/18 11.11:48<bMon, 12 Nov 2018 11:11:48 +0100>'),
('aayush', 'great work', '11/12/18 11.14:03<bMon, 12 Nov 2018 11:14:03 +0100>'),
('luke', 'nzdoxkivjs', '11/12/18 13.18:55<bMon, 12 Nov 2018 13:18:55 +0100>'),
('luke', 'nice design', '03/12/19 6.59:41<bTue, 12 Mar 2019 06:59:41 +0100>'),
('aayush.ok', 'improve the ui', '07/20/19 20.38:34<bSat, 20 Jul 2019 20:38:34 +0200>'),
('luke', 'add more courses', '05/21/20 14.12:25<bThu, 21 May 2020 14:12:25 +0200>'),
('user141', 'no suggestions', '05/22/20 6.58:27<bFri, 22 May 2020 06:58:27 +0200>'),
('amol', 'nice one', '05/23/20 8.34:01<bSat, 23 May 2020 08:34:01 +0200>'),
('newuser', 'create more courses', '05/23/20 9.43:17<bSat, 23 May 2020 09:43:17 +0200>');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
