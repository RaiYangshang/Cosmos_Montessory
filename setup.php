<?php 
$conn = mysqli_connect("localhost", "root", "");
mysqli_query($conn,"CREATE DATABASE IF NOT EXISTS `montessori_mgmt` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;");

mysqli_select_db($conn,"montessori_mgmt");

mysqli_query($conn,"CREATE TABLE IF NOT EXISTS `admission` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;");

mysqli_query($conn,"INSERT INTO `admission` (`id`, `name`, `age`, `gender`, `address`) VALUES
(1, 'Rohan', 2, 'male', 'ktm\r\n')");


mysqli_query($conn,"CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;");


mysqli_query($conn,"INSERT INTO `events` (`id`, `name`, `date`, `time`) VALUES
(1, 'Monika''s Birthday', '2017-07-17', '13:00:00');");

mysqli_query($conn,"CREATE TABLE IF NOT EXISTS `registration` (
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phoneno` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;");


mysqli_query($conn,"INSERT INTO `registration` (`username`, `name`, `email`, `password`, `gender`, `address`, `phoneno`) VALUES
('admin', 'admin', 'admin@admin.com', 'admin', 'female', 'admin', '9806010188'),
('chettri_prabin', 'Prabin Chettri', 'prabin_chettri@gmail.com', 'prabin@123', 'male', 'New Baneshor', '9842625373'),
('shital_giri@123', 'Shital', 'giriShital123@gmail.com', 'shital@123', 'female', 'Chabahil', '9806010188'),
('srijana', 'Srijana Pun', 'srijana@gmail.com', 'pass', 'female', 'KTM', '87586');");


mysqli_query($conn,"ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);");

mysqli_query($conn,"ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);");

mysqli_query($conn,"ALTER TABLE `registration`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`);");

mysqli_query($conn,"ALTER TABLE `admission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;");

mysqli_query($conn,"ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;");
 ?>