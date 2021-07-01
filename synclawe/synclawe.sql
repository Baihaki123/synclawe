-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 05:12 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `synclawe`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(15) NOT NULL,
  `username` varchar(128) CHARACTER SET latin1 NOT NULL,
  `password` varchar(128) NOT NULL,
  `nama_admin` varchar(128) NOT NULL,
  `opd_name` varchar(128) NOT NULL,
  `opd_id` int(15) NOT NULL,
  `role_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama_admin`, `opd_name`, `opd_id`, `role_id`) VALUES
(1, 'admin@gmail.com', '123', 'takyun', 'kominfo', 1, 1),
(2, 'aski@gmail.com', 'admin', 'aski', 'dishub', 2, 2),
(3, 'contoh@gmail.com', '12345677', 'contoh', 'asahdjgj', 3, 3),
(4, 'raya@gmail.com', '123asfsdgs', 'raya', 'raya', 4, 4),
(5, 'asnjad@gmail.com', 'dsafsdgfsc', 'tyn', 'tyn', 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE `educations` (
  `id` int(4) NOT NULL,
  `name` varchar(100) NOT NULL,
  `education_category` varchar(10) NOT NULL,
  `province_id` int(2) NOT NULL,
  `regency_id` int(3) NOT NULL,
  `address` text NOT NULL,
  `lat` varchar(10) NOT NULL,
  `long` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(10) NOT NULL,
  `nama_group` varchar(50) NOT NULL,
  `group_category` varchar(25) NOT NULL,
  `education_category` varchar(25) NOT NULL,
  `education` varchar(100) NOT NULL,
  `email_mentor` varchar(100) NOT NULL,
  `study_program` varchar(50) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `opd_id` int(15) NOT NULL,
  `is_approve` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(15) NOT NULL,
  `member_id` int(15) NOT NULL,
  `tgl_keg` date NOT NULL,
  `nama_keg` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `status` varchar(30) NOT NULL,
  `bukti` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(15) NOT NULL,
  `group_id` int(15) NOT NULL,
  `nim_nis` varchar(20) NOT NULL,
  `nama_member` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(128) NOT NULL,
  `address_member` text NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `semester_class` varchar(20) NOT NULL,
  `role_id` int(15) NOT NULL,
  `is_active` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mentors`
--

CREATE TABLE `mentors` (
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(128) NOT NULL,
  `education` varchar(100) NOT NULL,
  `role_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `output_magang`
--

CREATE TABLE `output_magang` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `member_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `upload_output` varchar(128) NOT NULL,
  `tgl_selesai` date NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(15) NOT NULL,
  `name` varchar(128) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id` int(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` char(20) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `unit_kuota`
--

CREATE TABLE `unit_kuota` (
  `id` int(15) NOT NULL,
  `kuota` int(15) NOT NULL,
  `email` varchar(128) NOT NULL,
  `opd_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(24, 'Aski', 'baihakiaski@gmail.com', 'user8-128x128.jpg', '$2y$10$yV/UqjNv.siRG1VsS1TuoOtTXct7Sjk/upIvD2knxKvUIv/KbBteW', 1, 1, 1622503481),
(25, 'BAIHAKI', 'askibaihaki50@gmail.com', 'avatar04.png', '$2y$10$K0HJ.kTSJsVaFqWa1gO76eHwzL.oMZVWjMB5GRQvWe69DRsP8fNPy', 2, 1, 1622505727),
(47, 'ariel', 'aariel873@gmail.com', 'default.jpg', '$2y$10$sTmOYx.3Z/jZgQFQEwAN1epieooJWLaYcQyPcNATliLDfV5wEdEM2', 3, 1, 1625120853);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 2, 2),
(6, 2, 3),
(7, 2, 4),
(8, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'SAdmin'),
(2, 'Admin'),
(3, 'User'),
(4, 'Menu');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `role_id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`role_id`, `role`) VALUES
(1, 'SAdmin'),
(2, 'Admin'),
(3, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'login/SAdmin', 'fa fa-fw fa-home', 1),
(2, 3, 'Profil', 'login/User', 'fa fa-fw fa-user', 0),
(3, 3, 'Edit Profile', 'login/User/edit', 'fa fa-fw fa-edit', 0),
(4, 4, 'Menu Management', 'login/Menu', 'fa fa-fw fa-folder', 1),
(5, 4, 'Submenu Management', 'login/Menu/submenu', 'fa fa-fw fa-folder-open', 1),
(7, 1, 'Role', 'login/SAdmin/role', 'fa fa-fw fa-shield', 0),
(8, 3, 'Change Password', 'login/User/changepassword', 'fa fa-fw fa-key', 0),
(66, 3, 'Pengajuan Magang', 'login/User/pengajuan', 'fa fa-fw fa-file', 1),
(67, 1, 'User', 'login/SAdmin/user', 'fa fa-fw fa-user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `opd_id` (`opd_id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `role_id_2` (`role_id`);

--
-- Indexes for table `educations`
--
ALTER TABLE `educations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `opd_id` (`opd_id`),
  ADD KEY `email_mentor` (`email_mentor`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_id` (`group_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `mentors`
--
ALTER TABLE `mentors`
  ADD PRIMARY KEY (`email`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `output_magang`
--
ALTER TABLE `output_magang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit_kuota`
--
ALTER TABLE `unit_kuota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kuota` (`kuota`),
  ADD KEY `opd_id` (`opd_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `groups_ibfk_1` FOREIGN KEY (`id`) REFERENCES `members` (`group_id`);

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_ibfk_1` FOREIGN KEY (`id`) REFERENCES `output_magang` (`member_id`),
  ADD CONSTRAINT `members_ibfk_2` FOREIGN KEY (`id`) REFERENCES `kegiatan` (`member_id`);

--
-- Constraints for table `mentors`
--
ALTER TABLE `mentors`
  ADD CONSTRAINT `mentors_ibfk_1` FOREIGN KEY (`email`) REFERENCES `groups` (`email_mentor`);

--
-- Constraints for table `roles`
--
ALTER TABLE `roles`
  ADD CONSTRAINT `roles_ibfk_1` FOREIGN KEY (`id`) REFERENCES `mentors` (`role_id`),
  ADD CONSTRAINT `roles_ibfk_3` FOREIGN KEY (`id`) REFERENCES `admin` (`role_id`),
  ADD CONSTRAINT `roles_ibfk_4` FOREIGN KEY (`id`) REFERENCES `members` (`role_id`),
  ADD CONSTRAINT `roles_ibfk_5` FOREIGN KEY (`id`) REFERENCES `acces_menu` (`role_id`);

--
-- Constraints for table `unit`
--
ALTER TABLE `unit`
  ADD CONSTRAINT `unit_ibfk_1` FOREIGN KEY (`id`) REFERENCES `unit_kuota` (`opd_id`),
  ADD CONSTRAINT `unit_ibfk_2` FOREIGN KEY (`id`) REFERENCES `admin` (`opd_id`),
  ADD CONSTRAINT `unit_ibfk_3` FOREIGN KEY (`id`) REFERENCES `groups` (`opd_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
