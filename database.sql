-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2021 at 09:45 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE
= "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone
= "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bsit`
--
CREATE DATABASE IF NOT EXISTS seville;
-- --------------------------------------------------------

-- Users table
CREATE TABLE Users
(
  id int NOT NULL AUTO_INCREMENT,
  firstName varChar(200) NOT NULL,
  lastName varChar(200) NOT NULL,
  email varChar(200) NOT NULL UNIQUE,
  pass varChar(200) NOT NULL,
  dateCreated datetime,
  lastLogin datetime,

  PRIMARY KEY (id)
);

-- dummy user data
INSERT INTO Users
VALUES
  (NULL, "Admin", "Admin", "admin", "admin@2022", "2021-8-2", "2021-8-2");


  CREATE TABLE Emails
(
  id int NOT NULL AUTO_INCREMENT,
  full_name varChar(200),
  customer_type int,
  email varChar(200),
  phone varChar(200),
  preferred_day_time datetime,
  comments varchar(5000),
  enquirytype varchar(50),
  PRIMARY KEY (id)
);

Alter table Emails 
ADD reason int;

CREATE TABLE reasons
(
  id int NOT NULL,
  reason_name varChar(200),
  active int,
  PRIMARY KEY (id)
);

INSERT INTO reasons(id, reason_name, active)
VALUES(1,"Consultation/Check up",1);

INSERT INTO reasons(id, reason_name, active)
VALUES(2,"Check up and Clean",1);

INSERT INTO reasons(id, reason_name, active)
VALUES(3,"Emergency/ Tothache Extraction",1);

INSERT INTO reasons(id, reason_name, active)
VALUES(4,"Filling",1);

INSERT INTO reasons(id, reason_name, active)
VALUES(5,"Cosmetic Dentistry",1);
INSERT INTO reasons(id, reason_name, active)
VALUES(6,"Others",1);

INSERT INTO reasons(id, reason_name, active) VALUES(0,"no reason selected",1)


Alter table Emails 
ADD requested_time time;