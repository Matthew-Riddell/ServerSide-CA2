-- Matthew Riddell
-- SD1c D00245674
-- NASA Database for ServerSide CA2

USE D00245674;
DROP TABLE IF EXISTS programs, missions, rockets, cargo, payload;

-- Creating Tables
-- Programs Table
CREATE TABLE programs ( program_name CHAR(20) NOT NULL,
program_start_date DATE,
program_end_date DATE,
program_status VARCHAR(30),
PRIMARY KEY (program_name));

-- Missions Table
CREATE TABLE missions ( mission_id CHAR(20) NOT NULL,
program_name CHAR(20),
mission_name VARCHAR(30),
mission_type VARCHAR(50),
mission_crew INT,
mission_status VARCHAR(30),
PRIMARY KEY (mission_id),
FOREIGN KEY (program_name) REFERENCES programs(program_name));

-- Inserting Table Data
-- Programs Table
INSERT INTO
		programs (program_name, program_start_date, program_end_date, program_status)
VALUES
		('Mercury', '1958-10-07', '1963-05-15', 'COMPLETE'),
		('Gemini', '1964-04-08', '1966-11-11', 'COMPLETE'),
		('Apollo', '1961-10-27', '1972-12-19', 'COMPLETE'),
		('Skylab', '1973-05-04', '1979-07-11', 'DEORBITED'),
		('Voyager', '1977-08-20', NULL, 'ONGOING'),
		('Mariner', '1962-07-22', '1975-03-24', 'COMPLETE'),
		('Pioneer', '1958-08-17', '1978-08-08', 'COMPLETE'),
		('Viking', '1975-08-20', '1975-09-09', 'COMPLETE'),
		('Space Shuttle', '1977-08-12', '2011-07-21', 'RETIRED'),
		('Vanguard', '1957-12-06', '1959-09-18', 'COMPLETE');
		
-- Missions Table
INSERT INTO
		missions (mission_id, program_name, mission_name, mission_type, mission_crew, mission_status)
VALUES
		('1', 'Mercury', 'Mercury-Atlas 6', 'Test flight', 1, 'COMPLETE'),
		('2', 'Mercury', 'Mercury-Atlas 7', 'Test flight', 1, 'COMPLETE'),
		('3', 'Gemini', 'Gemini 6A', 'Orbital Rendezvous', 2, 'COMPLETE'),
		('4', 'Gemini',	'Gemini 8',	'Docking test',	2,	'COMPLETE'),
		('5', 'Apollo',	'Apollo 4',	'Uncrewed Earth orbital CSM flight', 0, 'COMPLETE'),
		('6', 'Apollo',	'Apollo 5',	'Uncrewed Earth orbital LM flight', 0, 'COMPLETE'),
		('7', 'Apollo',	'Apollo 6',	'Uncrewed Earth orbital CSM flight', 0, 'COMPLETE'),
		('8', 'Apollo',	'Apollo 7',	'Crewed Earth orbital CSM flight', 3, 'COMPLETE'),
		('9', 'Apollo',	'Apollo 8',	'Crewed lunar orbital CSM flight', 3, 'COMPLETE'),
		('10', 'Apollo',	'Apollo 9',	'Crewed Earth orbital CSM/LM flight', 3, 'COMPLETE'),
		('11', 'Apollo',	'Apollo 10', 'Crewed Earth orbital CSM/LM flight', 3, 'COMPLETE'),
		('12', 'Apollo',	'Apollo 11', 'Crewed lunar landing', 3, 'COMPLETE'),
		('13', 'Skylab', 'Skylab', 'Manned Space Station', 3, 'DEORBITED'),
		('14', 'Mariner', 'Mariner 10', 'Planetary exploration', 0, 'DECOMMISSIONED'),
		('15', 'Voyager', 'Voyager 1', 'Outer planetary exploration', 0, 'ONGOING'),
		('16', 'Voyager', 'Voyager 2', 'Outer planetary exploration', 0,	'ONGOING'),
		('17', 'Pioneer', 'Pioneer 11', 'Planetary exploration', 0,	'COMPLETE'),
		('18', 'Viking', 'Viking 1', 'Martian planetary exploration', 0,	'COMPLETE'),
		('19', 'Viking', 'Viking 2', 'Martian planetary exploration', 0,	'COMPLETE');
		
