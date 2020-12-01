SHOW DATABASES;
DROP DATABASE IF EXISTS npattniassign2db;
CREATE DATABASE npattniassign2db;
USE npattniassign2db;
GRANT USAGE ON *.* TO 'ta'@'localhost';
DROP USER 'ta'@'localhost';
CREATE USER 'ta'@'localhost' IDENTIFIED BY 'cs3319';
GRANT ALL PRIVILEGES ON npattniassign2db.* TO 'ta'@'localhost';
FLUSH PRIVILEGES;
SHOW TABLES;

CREATE TABLE WesternCourse(
	CourseName VARCHAR(50) NOT NULL,
	CourseNumber CHAR(6) NOT NULL,
	Weight CHAR(3) NOT NULL,
	Suffix VARCHAR(3),
	PRIMARY KEY(CourseNumber) );

CREATE TABLE University(
	UniversityID VARCHAR(2) NOT NULL,
	OfficialName VARCHAR(50) NOT NULL,
	City VARCHAR(20) NOT NULL,
	Province CHAR(2) NOT NULL,
	Nickname VARCHAR(20) NOT NULL,
	PRIMARY KEY(UniversityID) );

CREATE TABLE OtherCourse(
	CourseName VARCHAR(50) NOT NULL,
	CourseCode CHAR(10) NOT NULL,
	Weight CHAR(3) NOT NULL,
	YearOffered CHAR(1) NOT NULL,
	UniversityID VARCHAR(2),
	FOREIGN KEY(UniversityID) REFERENCES University(UniversityID) ON DELETE SET NULL );

CREATE TABLE EquivalentCourses(
	WesternCourse CHAR(6),
	OutsideCourse CHAR(10),
	University VARCHAR(2),
	DateDecided VARCHAR(12) NOT NULL,
	FOREIGN KEY(WesternCourse) REFERENCES WesternCourse(CourseNumber) ON DELETE SET NULL,
	FOREIGN KEY(University) REFERENCES University(UniversityID) ON DELETE SET NULL );
SHOW TABLES;
