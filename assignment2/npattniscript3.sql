SHOW DATABASES;
USE npattniassign2db;
SHOW TABLES;

-- QUERY 1
SELECT CourseName FROM WesternCourse;
-- QUERY 2
SELECT Distinct(CourseCode) FROM OtherCourse;
-- QUERY 3
SELECT * FROM WesternCourse ORDER BY CourseName ASC;
-- QUERY 4
SELECT CourseNumber, CourseName FROM WesternCourse WHERE Weight="0.5";
-- QUERY 5
SELECT CourseCode, CourseName FROM OtherCourse WHERE UniversityID="2";
-- QUERY 6
SELECT OtherCourse.CourseName,University.Nickname FROM OtherCourse,University WHERE LEFT(OtherCourse.CourseName,12)="Introduction" AND OtherCourse.UniversityID=University.UniversityID;
-- QUERY 7
SELECT OtherCourse.CourseName,University.OfficialName,EquivalentCourses.WesternCourse,EquivalentCourses.DateDecided FROM OtherCourse,University,EquivalentCourses
	WHERE SUBSTRING(EquivalentCourses.DateDecided,-4,4)<SUBSTRING(DATE_SUB(CURDATE(), INTERVAL -5 YEAR), 1, 4)
	AND EquivalentCourses.OutsideCourse=OtherCourse.CourseCode AND EquivalentCourses.University=University.UniversityID;
-- QUERY 8
SELECT OtherCourse.CourseName,University.Nickname FROM OtherCourse,University,EquivalentCourses
	WHERE EquivalentCourses.WesternCourse="cs1026" AND EquivalentCourses.University=University.UniversityID AND EquivalentCourses.OutsideCourse=OtherCourse.CourseCode;
-- QUERY 9
SELECT COUNT(WesternCourse) FROM EquivalentCourses WHERE WesternCourse="cs1026";
-- QUERY 10
SELECT WesternCourse.CourseName,OtherCourse.CourseName,University.Nickname FROM EquivalentCourses,WesternCourse,OtherCourse,University
	WHERE EquivalentCourses.University=University.UniversityID AND University.City="Waterloo";
-- QUERY 11
SELECT University.OfficialName FROM EquivalentCourses,University WHERE University.UniversityID!=EquivalentCourses.University;
-- QUERY 12
SELECT WesternCourse.CourseName,EquivalentCourses.WesternCourse FROM WesternCourse,EquivalentCourses,OtherCourse
	WHERE EquivalentCourses.OutsideCourse=OtherCourse.CourseCode AND (OtherCourse.YearOffered="3" OR OtherCourse.YearOffered="4");
-- QUERY 13
SELECT WesternCourse FROM EquivalentCourses GROUP BY OutsideCourse WHERE COUNT(WesternCourse)>1;