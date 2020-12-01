SHOW DATABASES;
USE npattniassign2db;
SELECT * FROM University;
LOAD DATA LOCAL INFILE "./loaddatafall2020.txt" INTO TABLE University 
	COLUMNS TERMINATED BY ','
	LINES TERMINATED BY '\n'
	(UniversityID,OfficialName,City,Province,Nickname);
SELECT * FROM University;

SELECT * FROM WesternCourse;
INSERT INTO WesternCourse VALUES ("Computer Science Fundamentals I","cs1026","0.5","A/B");
INSERT INTO WesternCourse VALUES ("Computer Science Fundamentals II","cs1027","0.5","A/B");
INSERT INTO WesternCourse VALUES ("Algorithms and Data Structures","cs2210","1.0","A/B");
INSERT INTO WesternCourse VALUES ("Databases I","cs3319","0.5","A/B");
INSERT INTO WesternCourse VALUES ("Modern Survival Skills I: Coding Essentials","cs2120","0.5","A/B");
INSERT INTO WesternCourse VALUES ("Thesis","cs4490","0.5","Z");
INSERT INTO WesternCourse VALUES ("Intro to Coding using Pascal and Fortran","cs0020","1.0","");
INSERT INTO WesternCourse VALUES ("Introduction to Fullstack Development","cs9999","1.0","F/G");
SELECT * FROM WesternCourse;

SELECT * FROM University;
INSERT INTO University VALUES ("11","Not A University","Nowhere","NL","NAU");
SELECT * FROM University;

SELECT * FROM OtherCourse;
INSERT INTO OtherCourse VALUES ("Introduction to Programming","CompSci022","0.5","1","2");
INSERT INTO OtherCourse VALUES ("Intro to Programming for Med students","CompSci033","0.5","3","2");
INSERT INTO OtherCourse VALUES ("Packages","CompSci021","1.0","2","2");
INSERT INTO OtherCourse VALUES ("Introduction to Databases","Compsci222","1.0","2","2");
INSERT INTO OtherCourse VALUES ("Advanced Programming","CompSci023","0.5","1","2");
INSERT INTO OtherCourse VALUES ("Intro to Computer Science","CompSci011","0.5","2","4");
INSERT INTO OtherCourse VALUES ("Using UNIX","CompSci123","0.5","2","4");
INSERT INTO OtherCourse VALUES ("Intro Programming","CompSci021","1.0","1","66");
INSERT INTO OtherCourse VALUES ("Advanced Programming","CompSci022","0.5","1","66");
INSERT INTO OtherCourse VALUES ("Using Databases","CompSci319","0.5","3","66");
INSERT INTO OtherCourse VALUES ("Graphics","CompSci333","0.5","3","55");
INSERT INTO OtherCourse VALUES ("Networks","CompSci444","0.5","4","55");
INSERT INTO OtherCourse VALUES ("Using Packages","CompSci022","0.5","1","77");
INSERT INTO OtherCourse VALUES ("Introduction to Using Data Structures","Compsci101","0.5","2","77");
INSERT INTO OtherCourse VALUES ("Intro to CompSci","CompSci293","1.0","2","11");
INSERT INTO OtherCourse VALUES ("Advanced CompSci","CompSci499","0.5","4","11");
SELECT * FROM OtherCourse;

SELECT * FROM EquivalentCourses;
INSERT INTO EquivalentCourses VALUES ("cs1026","CompSci022","2","May 12, 2015");
INSERT INTO EquivalentCourses VALUES ("cs1026","CompSci033","2","Jan 2, 2013");
INSERT INTO EquivalentCourses VALUES ("cs1026","CompSci011","4","Feb 9, 1997");
INSERT INTO EquivalentCourses VALUES ("cs1026","CompSci021","66","Jan 12, 2010");
INSERT INTO EquivalentCourses VALUES ("cs1027","CompSci023","2","Jun 22, 2017");
INSERT INTO EquivalentCourses VALUES ("cs1027","CompSci022","66","Sep 1, 2019");
INSERT INTO EquivalentCourses VALUES ("cs2210","CompSci101","77","Jul 12, 1998");
INSERT INTO EquivalentCourses VALUES ("cs3319","CompSci222","2","Sep 13, 1990");
INSERT INTO EquivalentCourses VALUES ("cs3319","CompSci319","66","Sep 21, 1987");
INSERT INTO EquivalentCourses VALUES ("cs2120","CompSci022","2","Dec 10, 2018");
INSERT INTO EquivalentCourses VALUES ("cs0020","CompSci022","2","Sep 17, 1999");
SELECT * FROM EquivalentCourses;

SELECT * FROM EquivalentCourses;
UPDATE EquivalentCourses SET DateDecided="Sep 19, 2018" WHERE WesternCourse="cs0020" AND OutsideCourse="CompSci022" AND University="2";
SELECT * FROM EquivalentCourses;

SELECT * FROM OtherCourse;
UPDATE OtherCourse SET YearOffered="1" WHERE LEFT(CourseName,5)="Intro";
SELECT * FROM OtherCourse;
