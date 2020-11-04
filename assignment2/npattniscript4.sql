SHOW DATABASES;
USE npattniassign2db;
SHOW TABLES;

CREATE VIEW NewView AS SELECT OtherCourse.CourseCode,University.OfficialName,University.Nickname,University.City,WesternCourse.CourseName
	FROM EquivalentCourses,OtherCourse,University,WesternCourse
	WHERE OtherCourse.YearOffered="1" AND OtherCourse.CourseCode=EquivalentCourses.OutsideCourse AND EquivalentCourses.WesternCourse=WesternCourse.CourseNumber;
SELECT * FROM NewView;
SELECT * FROM NewView WHERE University.Nickname="UofT" ORDER BY WesternCourse.CourseName ASC;
SELECT * FROM University;
DELETE FROM University WHERE Nickname like "%cord%";
SELECT * FROM University;
DELETE FROM University WHERE Province="ON";
-- Couldn't delete them because these universities appear as foreign keys in other tables.
SELECT * FROM University;
SELECT * FROM OtherCourse, University WHERE OtherCourse.UniversityID=University.UniversityID;
DELETE FROM OtherCourse,University WHERE OtherCourse.UniversityID="4" OR OtherCourse.UniversityID="77";
SELECT * FROM OtherCourse,University WHERE OtherCourse.UniversityID=University.UniversityID;
SELECT * FROM NewView;
