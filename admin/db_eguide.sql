-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2021 at 04:41 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_eguide`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_announcements`
--

CREATE TABLE `tbl_admin_announcements` (
  `admin_announce_id` int(11) NOT NULL,
  `admin_announce_title` varchar(255) DEFAULT NULL,
  `admin_announce_description` varchar(1000) DEFAULT NULL,
  `admin_announce_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `admin_announce_target` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_audit`
--

CREATE TABLE `tbl_audit` (
  `audit_id` int(11) NOT NULL,
  `audit_username` varchar(255) DEFAULT NULL,
  `audit_action` varchar(255) DEFAULT NULL,
  `audit_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `audit_task_id` int(11) NOT NULL,
  `audit_project_id` int(11) NOT NULL,
  `audit_task_status` varchar(255) NOT NULL,
  `audit_client_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_audit`
--

INSERT INTO `tbl_audit` (`audit_id`, `audit_username`, `audit_action`, `audit_timestamp`, `audit_task_id`, `audit_project_id`, `audit_task_status`, `audit_client_id`) VALUES
(7, 'renzchem@yahoo.com', 'Add Task', '2020-11-26 16:07:04', 711258, 1031866, '1', 112020944),
(8, 'renzchem@yahoo.com', 'Add Task', '2020-12-03 10:03:40', 711258, 1031866, '1', 112020944),
(9, 'renzchem@yahoo.com', 'Add Task', '2020-12-03 10:04:00', 711258, 1031866, '2', 112020944),
(10, 'renzchem@yahoo.com', 'Add Task', '2020-12-03 10:04:19', 711258, 1031866, '2', 112020944),
(11, 'renzchem@yahoo.com', 'Add Task', '2020-12-03 10:04:34', 711258, 1031866, '2', 112020944),
(12, 'renzchem@yahoo.com', 'Add Task', '2020-12-03 10:05:11', 711259, 1031866, '2', 112020944),
(13, 'renzchem@yahoo.com', 'Add Task', '2020-12-03 10:05:46', 711260, 1031866, '2', 112020944),
(14, 'renzchem@yahoo.com', 'Add Task', '2020-12-03 10:15:32', 711261, 1031866, '2', 112020944),
(15, 'renzchem@yahoo.com', 'Add Task', '2020-12-03 13:12:03', 711262, 1031866, '2', 112020944),
(16, 'renzchem@yahoo.com', 'Add Task', '2020-12-04 10:12:01', 711263, 1031872, '1', 112020946),
(17, 'renzchem@yahoo.com', 'Add Task', '2020-12-04 10:12:28', 711264, 1031872, '1', 112020946),
(18, 'renzchem@yahoo.com', 'Update Task', '2020-12-04 15:46:37', 711262, 1031866, '3', 112020944),
(19, 'renzchem@yahoo.com', 'Update Task', '2020-12-04 15:48:09', 711262, 1031866, '2', 112020944),
(20, 'renzchem@yahoo.com', 'Update Task', '2020-12-04 15:48:09', 711262, 1031866, '2', 112020944),
(21, 'renzchem@yahoo.com', 'Add Task', '2020-12-05 06:21:59', 711265, 1031874, '1', 112020948),
(22, 'renzchem@yahoo.com', 'Add Task', '2020-12-05 06:23:24', 711266, 1031874, '1', 112020948),
(23, 'renzchem@yahoo.com', 'Add Task', '2020-12-05 06:23:33', 711267, 1031874, '1', 112020948),
(24, 'renzchem@yahoo.com', 'Add Task', '2020-12-05 06:24:05', 711268, 1031874, '1', 112020948),
(25, 'renzchem@yahoo.com', 'Add Task', '2020-12-05 06:25:20', 711269, 1031874, '1', 112020948),
(26, 'renzchem@yahoo.com', 'Add Task', '2020-12-05 06:26:34', 711270, 1031874, '1', 112020948),
(27, 'renzchem@yahoo.com', 'Add Task', '2020-12-05 06:26:59', 711271, 1031874, '1', 112020948),
(28, 'renzchem@yahoo.com', 'Add Task', '2020-12-05 06:28:11', 711272, 1031874, '1', 112020948),
(29, 'renzchem@yahoo.com', 'Add Task', '2020-12-05 06:28:33', 711273, 1031874, '1', 112020948),
(30, 'renzchem@yahoo.com', 'Add Task', '2020-12-05 06:28:55', 711274, 1031874, '1', 112020948),
(31, 'renzchem@yahoo.com', 'Add Task', '2020-12-05 06:29:22', 711275, 1031874, '1', 112020948),
(32, 'renzchem@yahoo.com', 'Add Task', '2020-12-05 06:29:39', 711276, 1031874, '1', 112020948),
(33, 'renzchem@yahoo.com', 'Update Task', '2020-12-05 06:30:52', 711267, 1031874, '2', 112020948),
(34, 'renzchem@yahoo.com', 'Update Task', '2020-12-05 06:30:52', 711267, 1031874, '2', 112020948),
(35, 'renzchem@yahoo.com', 'Update Task', '2020-12-05 06:30:52', 711267, 1031874, '2', 112020948),
(36, 'renzchem@yahoo.com', 'Update Task', '2020-12-05 06:31:01', 711268, 1031874, '2', 112020948),
(37, 'renzchem@yahoo.com', 'Update Task', '2020-12-05 06:31:01', 711268, 1031874, '2', 112020948),
(38, 'renzchem@yahoo.com', 'Update Task', '2020-12-05 06:31:01', 711268, 1031874, '2', 112020948),
(39, 'renzchem@yahoo.com', 'Update Task', '2020-12-05 06:55:32', 711269, 1031874, '2', 112020948),
(40, 'renzchem@yahoo.com', 'Update Task', '2020-12-05 06:55:32', 711269, 1031874, '2', 112020948),
(41, 'renzchem@yahoo.com', 'Update Task', '2020-12-05 06:55:32', 711269, 1031874, '2', 112020948),
(42, 'renzchem@yahoo.com', 'Update Task', '2020-12-05 06:55:42', 711267, 1031874, '3', 112020948),
(43, 'renzchem@yahoo.com', 'Update Task', '2020-12-05 06:55:42', 711267, 1031874, '3', 112020948),
(44, 'renzchem@yahoo.com', 'Update Task', '2020-12-05 06:55:42', 711267, 1031874, '3', 112020948),
(45, 'renzchem@yahoo.com', 'Add Task', '2020-12-05 11:00:49', 711277, 1031874, '1', 112020948),
(46, 'renzchem@yahoo.com', 'Add Task', '2020-12-05 11:01:02', 711278, 1031874, '1', 112020948),
(47, 'renzchem@yahoo.com', 'Add Task', '2020-12-05 11:01:06', 711279, 1031874, '1', 112020948),
(48, 'renzchem@yahoo.com', 'Add Task', '2020-12-05 11:02:07', 711280, 1031874, '1', 112020948),
(49, 'renzchem@yahoo.com', 'Add Task', '2020-12-05 11:02:24', 711281, 1031874, '1', 112020948),
(50, 'renzchem@yahoo.com', 'Add Task', '2020-12-05 11:02:29', 711282, 1031874, '1', 112020948),
(51, 'renzchem@yahoo.com', 'Add Task', '2020-12-05 11:04:56', 711283, 1031874, '2', 112020948),
(52, 'renzchem@yahoo.com', 'Add Task', '2020-12-05 11:05:01', 711284, 1031874, '2', 112020948),
(53, 'renzchem@yahoo.com', 'Add Task', '2020-12-05 11:05:47', 711285, 1031874, '1', 112020948),
(54, 'renzchem@yahoo.com', 'Add Task', '2020-12-05 11:07:44', 711286, 1031874, '1', 112020948),
(55, 'renzchem@yahoo.com', 'Add Task', '2020-12-05 11:08:50', 711287, 1031874, '2', 112020948),
(56, 'renzchem@yahoo.com', 'Add Task', '2020-12-05 11:10:04', 711288, 1031874, '1', 112020948),
(57, 'renzchem@yahoo.com', 'Add Task', '2020-12-05 11:10:08', 711289, 1031874, '1', 112020948),
(58, 'renzchem@yahoo.com', 'Add Task', '2020-12-05 11:10:12', 711290, 1031874, '1', 112020948),
(59, 'renzchem@yahoo.com', 'Add Task', '2020-12-05 11:10:14', 711291, 1031874, '1', 112020948),
(60, 'renzchem@yahoo.com', 'Add Task', '2020-12-05 11:10:20', 711292, 1031874, '1', 112020948);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lessons_restrictions`
--

CREATE TABLE `tbl_lessons_restrictions` (
  `lesson_restriction_id` int(11) NOT NULL,
  `lesson_restriction_quiz_id` int(11) DEFAULT NULL,
  `lesson_restriction_student_id` int(11) DEFAULT NULL,
  `lesson_restriction_lesson_id` int(11) DEFAULT NULL,
  `lesson_restriction_action` varchar(255) DEFAULT NULL,
  `lesson_restriction_quiz_type` varchar(255) DEFAULT NULL,
  `lesson_restriction_quiz_period` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_lessons_restrictions`
--

INSERT INTO `tbl_lessons_restrictions` (`lesson_restriction_id`, `lesson_restriction_quiz_id`, `lesson_restriction_student_id`, `lesson_restriction_lesson_id`, `lesson_restriction_action`, `lesson_restriction_quiz_type`, `lesson_restriction_quiz_period`) VALUES
(1, 1, 70013001, 1, 'true', 'Quiz', 'First Quarter'),
(2, 2, 70013001, 2, 'true', 'Quiz', 'First Quarter'),
(3, 1, 70013002, 1, 'true', 'Quiz', 'First Quarter');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_restriction_action`
--

CREATE TABLE `tbl_restriction_action` (
  `restriction_action_id` int(11) NOT NULL,
  `restriction_action_name` varchar(255) DEFAULT NULL,
  `restriction_action_user_level` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_restriction_action`
--

INSERT INTO `tbl_restriction_action` (`restriction_action_id`, `restriction_action_name`, `restriction_action_user_level`) VALUES
(1, 'Edit Equipment', '1,5'),
(2, 'Add Project', '1'),
(3, 'Delete Project', '1'),
(4, 'Edit Project Form', '1,5'),
(5, 'Edit Project Form (Foreman)', '6'),
(6, 'Add Engineer in Project', '1'),
(7, 'Add Foreman in Project', '1'),
(8, 'Delete Equipment in Project', '1,5'),
(9, 'Delete Task', '1,5'),
(10, 'View Equipments', '1,5,6'),
(11, 'View Engineers', '1'),
(12, 'View Foreman', '1'),
(13, 'View Clients', '1'),
(14, 'View Projects', '1,5,6'),
(15, 'View Contractors', '1'),
(16, 'Add Contractor', '1'),
(17, 'Edit Contractor', '1'),
(18, 'Delete Contractor', '1'),
(19, 'Display Project', '1'),
(20, 'Display Project (Engineer)', '5,6'),
(21, 'Display Project (Foreman)', '5,6'),
(22, 'Delete Users (Project)', '1,5'),
(23, 'Add Worker', '1,5,6'),
(24, 'Delete Worker', '1,5,6'),
(25, 'Add Announcement (Admin)', '1,3'),
(26, 'Add Announcement (Faculty)', '2'),
(27, 'Select Announcement (Admin)', '1'),
(28, 'Select Announcement (Faculty)', '2'),
(29, 'Table Column (Faculty)', '1,3'),
(31, 'Select Faculty Quiz', '2'),
(32, 'Select Admin Quiz', '1'),
(49, 'Select Header Name (Faculty)', '2'),
(50, 'Select Header Name (Admin)', '1'),
(51, 'Select Header Name (Secretary)', '3'),
(52, 'Select Students (Faculty)', '2'),
(53, 'Select Students (Admin)', '1,3'),
(54, 'Select Admin Lesson', '1'),
(55, 'Select Faculty Lesson', '2'),
(56, 'Lesson Faculty Id (Admin)', '1'),
(57, 'Lesson Faculty Id (Faculty)', '2'),
(58, 'View Score', '1,2'),
(59, 'Faculty Div Announcement', '2'),
(61, 'Faculty Get Lesson and Quiz', '2'),
(62, 'Admin Get Lesson and Quiz', '1'),
(63, 'View Dashboard', '1'),
(64, 'View Worker Salary', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_restriction_page`
--

CREATE TABLE `tbl_restriction_page` (
  `restriction_page_id` int(11) NOT NULL,
  `restriction_page_name` varchar(255) DEFAULT NULL,
  `restriction_page_user_level` varchar(255) DEFAULT NULL,
  `restriction_page_display_in_header` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_restriction_page`
--

INSERT INTO `tbl_restriction_page` (`restriction_page_id`, `restriction_page_name`, `restriction_page_user_level`, `restriction_page_display_in_header`) VALUES
(1, 'Student', '1,3,2', 'true'),
(2, 'Faculty', '1,3', 'true'),
(3, 'Subject', '1', 'true'),
(4, 'Section', '1', 'true'),
(5, 'Secretary', '1', 'true'),
(8, 'Quizzes', '1,2', 'true'),
(9, 'Lessons', '1,2', 'true'),
(10, 'Audit-Trail', '1', 'true'),
(11, 'Add Lesson', '1,2', 'false'),
(12, 'Engineer', '1', 'true'),
(13, 'Foreman', '1,5', 'true'),
(14, 'Client', '1', 'true'),
(15, 'Edit Foreman', '1,5', 'true'),
(16, 'Edit Engineer', '1', 'true'),
(17, 'Dashboard', '1', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_students`
--

CREATE TABLE `tbl_students` (
  `student_id` int(11) NOT NULL,
  `student_firstname` varchar(255) DEFAULT NULL,
  `student_lastname` varchar(255) DEFAULT NULL,
  `student_address` varchar(500) DEFAULT NULL,
  `student_gender` varchar(255) DEFAULT NULL,
  `student_birthday` varchar(255) DEFAULT NULL,
  `student_contact` varchar(255) DEFAULT NULL,
  `student_email` varchar(255) DEFAULT NULL,
  `student_image` varchar(255) DEFAULT NULL,
  `student_section_id` varchar(255) DEFAULT NULL,
  `student_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_students`
--

INSERT INTO `tbl_students` (`student_id`, `student_firstname`, `student_lastname`, `student_address`, `student_gender`, `student_birthday`, `student_contact`, `student_email`, `student_image`, `student_section_id`, `student_password`) VALUES
(70013001, 'Kenneth', 'Cartel', 'Blk 54 Lot 30b Sinilyasi St. Dagat-dagatan Caloocan City', 'Male', 'May,16,1997', '3234234', 'knnthcrtl.kc@gmail.com', 'resources/70013001-student_image.png', '1', '25d55ad283aa400af464c76d713c07ad'),
(70013002, 'aw', 'aw', 'aw', 'Male', 'January,1,1990', 'wew', 'weq', NULL, '1', '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `user_username` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_level` varchar(255) DEFAULT NULL,
  `user_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_username`, `user_password`, `user_level`, `user_user_id`) VALUES
(1, 'renzchem@yahoo.com', 'd94354ac9cf3024f57409bd74eec6b4c', '1', 0),
(3, 'secretary', '8b456ef37340f2b65cc4cb16d01980a2', '3', 0),
(67, '23232', '8b456ef37340f2b65cc4cb16d01980a2', '3', 0),
(69, 'donotreply@gmail.com', '8b456ef37340f2b65cc4cb16d01980a2', '2', 0),
(74, 'kennethcsantos@yahoo.com', 'fcea920f7412b5da7be0cf42b8c93759', '6', 12201047),
(102, 'zxc@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', '5', 20208542),
(110, 'linus@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '5', 20208544),
(111, 'par1990@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', '5', 20208545),
(113, 'kyleestrella@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '5', 20208546),
(114, 'wgsmith@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', '5', 20208547),
(115, 'acfernando@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', '5', 20208548),
(116, 'eduardomaynard@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', '5', 20208549),
(117, 'vasosa@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', '5', 20208550),
(118, 'ishaqhuff@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '5', 20208551),
(119, 'haroldjb@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', '5', 20208552),
(120, 'cayooo@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', '5', 20208553),
(121, 'camillereyes97@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', '5', 20208554),
(122, 'seantushy@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', '5', 20208555),
(123, 'clarkerwin@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', '6', 12201052),
(124, 'du30@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', '7', 112020948),
(125, 'ryanpolaris@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', '6', 12201053);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_handled_projects`
--

CREATE TABLE `tbl_user_handled_projects` (
  `user_handled_project_id` int(11) NOT NULL,
  `user_handled_project_project_id` int(11) NOT NULL,
  `user_handled_project_engineer_id` int(11) NOT NULL,
  `user_handled_user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user_handled_projects`
--

INSERT INTO `tbl_user_handled_projects` (`user_handled_project_id`, `user_handled_project_project_id`, `user_handled_project_engineer_id`, `user_handled_user_type`) VALUES
(16, 1031866, 12201047, 'Foreman'),
(18, 1031868, 20208539, 'Engineer'),
(20, 1031866, 20208539, 'Engineer'),
(21, 1031866, 12201051, 'Foreman'),
(22, 1031866, 12201050, 'Foreman'),
(24, 1031866, 20208542, 'Engineer'),
(25, 1031872, 12201050, 'Foreman'),
(26, 1031872, 20208539, 'Engineer'),
(27, 1031874, 20208542, 'Engineer'),
(28, 1031874, 20208544, 'Engineer'),
(29, 1031874, 12201053, 'Foreman'),
(30, 1031875, 20208547, 'Engineer'),
(31, 1031875, 12201051, 'Foreman');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_levels`
--

CREATE TABLE `tbl_user_levels` (
  `user_level_id` int(11) NOT NULL,
  `user_level_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_levels`
--

INSERT INTO `tbl_user_levels` (`user_level_id`, `user_level_name`) VALUES
(1, 'Administrator'),
(2, 'Faculty'),
(3, 'Secretary'),
(4, 'Student'),
(5, 'Engineer'),
(6, 'Foreman'),
(7, 'Client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin_announcements`
--
ALTER TABLE `tbl_admin_announcements`
  ADD PRIMARY KEY (`admin_announce_id`);

--
-- Indexes for table `tbl_audit`
--
ALTER TABLE `tbl_audit`
  ADD PRIMARY KEY (`audit_id`);

--
-- Indexes for table `tbl_lessons_restrictions`
--
ALTER TABLE `tbl_lessons_restrictions`
  ADD PRIMARY KEY (`lesson_restriction_id`);

--
-- Indexes for table `tbl_restriction_action`
--
ALTER TABLE `tbl_restriction_action`
  ADD PRIMARY KEY (`restriction_action_id`);

--
-- Indexes for table `tbl_restriction_page`
--
ALTER TABLE `tbl_restriction_page`
  ADD PRIMARY KEY (`restriction_page_id`);

--
-- Indexes for table `tbl_students`
--
ALTER TABLE `tbl_students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_username` (`user_username`);

--
-- Indexes for table `tbl_user_handled_projects`
--
ALTER TABLE `tbl_user_handled_projects`
  ADD PRIMARY KEY (`user_handled_project_id`);

--
-- Indexes for table `tbl_user_levels`
--
ALTER TABLE `tbl_user_levels`
  ADD PRIMARY KEY (`user_level_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin_announcements`
--
ALTER TABLE `tbl_admin_announcements`
  MODIFY `admin_announce_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_audit`
--
ALTER TABLE `tbl_audit`
  MODIFY `audit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `tbl_lessons_restrictions`
--
ALTER TABLE `tbl_lessons_restrictions`
  MODIFY `lesson_restriction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_restriction_action`
--
ALTER TABLE `tbl_restriction_action`
  MODIFY `restriction_action_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `tbl_restriction_page`
--
ALTER TABLE `tbl_restriction_page`
  MODIFY `restriction_page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_students`
--
ALTER TABLE `tbl_students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70013003;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `tbl_user_handled_projects`
--
ALTER TABLE `tbl_user_handled_projects`
  MODIFY `user_handled_project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_user_levels`
--
ALTER TABLE `tbl_user_levels`
  MODIFY `user_level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
