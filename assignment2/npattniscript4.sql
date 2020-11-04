SHOW DATABASES;
USE npattniassign2db;
SHOW TABLES;

CREATE VIEW Year1 AS SELECT OtherCourse.CourseName,University.OfficialName,University.Nickname,University.City,WesternCourse.CourseName
	FROM EquivalentCourses,OtherCourse,University,WesternCourse
	WHERE OtherCourse.YearOffered="1" AND OtherCourse.CourseCode=EquivalentCourse.OutsideCourse AND EquivalentCourses.WesternCourse=WesternCourse.CourseCode;
SHOW Year1;
SELECT * FROM Year1 WHERE University.Nickname="UofT" ORDER BY WesternCourse.CourseName ASC;
SHOW University;
DELETE CASCADE FROM University WHERE Nickname like "%cord%";
SHOW University;
DELETE CASCADE FROM University WHERE Province="ON";
-- Couldn't delete them because these universities appear as foreign keys in other tables.
SHOW University;
SELECT * FROM OtherCourse UNION SELECT * FROM University WHERE OtherCourse.UniversityID=University.UniversityID;
DELETE CASCADE FROM OtherCourse,University WHERE OtherCourse.University=University.UniversityID AND University.City="Waterloo";
SELECT * FROM OtherCourse UNION SELECT * FROM University WHERE OtherCourse.UniversityID=University.UniversityID;
SHOW Year1;