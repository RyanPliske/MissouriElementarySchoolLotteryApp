DROP SCHEMA IF EXISTS lottery CASCADE;--Drop Schema and REMAKE it
CREATE SCHEMA lottery; --All tables are created from 
set search_path = lottery; --newly created tables are added to this schema instead of public schema

CREATE TABLE AYcodes
(
	ay_code varchar(11) PRIMARY KEY,
	did_tour boolean
);

CREATE TABLE students
(
	student_id varchar(100) PRIMARY KEY,
	ay_code varchar(11) REFERENCES AYcodes,
	first_name varchar(100),
	last_name varchar(100),
	dob integer
);

CREATE TABLE guardians
(
	pid SERIAL PRIMARY KEY,
	ay_code varchar(11) REFERENCES AYcodes,
	first_name varchar(100),
	last_name varchar(100),
	email varchar(100),
	address varchar(100),
	phone_number varchar(10)
);

CREATE TABLE schools
(
	id SERIAL PRIMARY KEY,
	school_name varchar(100), --This was changed in v3 from 'name'
	address varchar(100),
	max_students integer
);

CREATE TABLE grades
(
	id integer PRIMARY KEY check (id >= 0) check (id <=5),
	grade_name varchar(100) --This was changed in v3 from 'name'
);
--version 3 edited from here----------------------------------------------

CREATE TABLE lotterys 
(
	id SERIAL PRIMARY KEY,
	ay_code varchar(11) REFERENCES AYcodes
);

/*The following tables are prototypes. Each school+grade combination will have it's own accepted and wait listed table...*/
CREATE TABLE bentonGradeOneAcceptList
(
	id SERIAL PRIMARY KEY,
	school_name varchar(100),
	grade_name varchar(100),
	ay_code varchar(11) --REFERENCES AYcodes
);

CREATE TABLE wait_lists /*bentonGradeOneWaitList*/
(
	id SERIAL PRIMARY KEY,
	ay_code varchar(11) --REFERENCES AYcodes
);
	
INSERT INTO AYcodes(ay_code, did_tour) VALUES('2013abcd', 'true'),('2013abce', 'true'),('2014abcd','true');	
SELECT*FROM AYcodes;
INSERT INTO wait_lists(id,ay_code) VALUES(1,'2013abcd'),(2,'2013abce'),(3,'2013abcf'),(4,'2013abcg'),(5,'2013abch');
SELECT*FROM wait_lists;
--version 3 edited to here-----------------------------------------------------------------------

--part of version 2------------------------------------------------------------------------------
--Set search_path
SET search_path = lottery;
SELECT*FROM grades;
--Insert rows into grades table
INSERT INTO grades VALUES(0, 'Kindergarten'),(1, 'First'),(2, 'Second'),(3, 'Third'),(4, 'Fourth'),(5, 'Fifth');
--Add app_level column
ALTER TABLE schools ADD COLUMN app_level int;
--Insert rows into schools table
INSERT INTO schools (id, school_name, app_level) VALUES(0, 'Benton S.T.E.M. Elementary', 0),(1, 'Lee Elementary', 0),(2, 'Ridgeway Elementary', 0),(3, 'Nature School', 5);
--Select from schools to add data into them
SELECT*FROM schools;

