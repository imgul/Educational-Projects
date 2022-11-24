/*
 Student Name : Gul
 Student ID : 200335158
 Description : A website to interact with the database
 */

-- A database to sava the courses data, rop if exixts

DROP DATABASE IF EXISTS courses;

CREATE DATABASE courses;

-- create table myCourses with columns course id, course title, credit housr, lab, instructor, year

USE courses;

DROP TABLE IF EXISTS myCourses;

USE courses;

CREATE TABLE
    myCourses (
        course_id INT NOT NULL AUTO_INCREMENT,
        course_title VARCHAR(255) NOT NULL,
        credit_hours INT NOT NULL,
        lab BOOLEAN NOT NULL,
        instructor VARCHAR(255) NOT NULL,
        year INT NOT NULL,
        PRIMARY KEY (course_id)
    );

-- insert data into myCourses

USE courses;

INSERT INTO
    myCourses (
        course_id,
        course_title,
        credit_hours,
        lab,
        instructor,
        year
    )
VALUES (
        1,
        'Database',
        3,
        0,
        'Dr. Smith',
        2022
    ), (
        2,
        'Web Design',
        3,
        0,
        'Dr. Smith',
        2022
    ), (
        3,
        'Web Programming',
        3,
        0,
        'Dr. Smith',
        2022
    ), (
        4,
        'Data Structures',
        3,
        0,
        'Dr. Smith',
        2022
    ), (
        5,
        'Algorithms',
        3,
        0,
        'Dr. Smith',
        2022
    ), (
        6,
        'Computer Architecture',
        3,
        0,
        'Dr. Smith',
        2022
    ), (
        7,
        'Operating Systems',
        3,
        0,
        'Dr. Smith',
        2022
    ), (
        8,
        'Computer Networks',
        3,
        0,
        'Dr. Smith',
        2022
    ), (
        9,
        'Software Engineering',
        3,
        0,
        'Dr. Smith',
        2022
    ), (
        10,
        'Database Lab',
        1,
        1,
        'Dr. Smith',
        2022
    ), (
        11,
        'Web Design Lab',
        1,
        1,
        'Dr. Smith',
        2022
    ), (
        12,
        'Web Programming Lab',
        1,
        1,
        'Dr. Smith',
        2022
    ), (
        13,
        'Data Structures Lab',
        1,
        1,
        'Dr. Smith',
        2022
    ), (
        14,
        'Algorithms Lab',
        1,
        1,
        'Dr. Smith',
        2022
    ), (
        15,
        'Computer Architecture Lab',
        1,
        1,
        'Dr. Smith',
        2022
    ), (
        16,
        'Operating Systems Lab',
        1,
        1,
        'Dr. Smith',
        2022
    ), (
        17,
        'Computer Networks Lab',
        1,
        1,
        'Dr. Smith',
        2022
    ), (
        18,
        'Software Engineering Lab',
        1,
        1,
        'Dr. Smith',
        2022
    );