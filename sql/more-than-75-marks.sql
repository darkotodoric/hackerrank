-- https://www.hackerrank.com/challenges/more-than-75-marks/problem

SELECT Name
FROM STUDENTS
WHERE Marks > 75
ORDER BY SUBSTR(Name, -3, 3), ID ASC;