-- https://www.hackerrank.com/challenges/weather-observation-station-10/problem

SELECT DISTINCT CITY
FROM STATION
WHERE SUBSTR(CITY, LENGTH(CITY), 1) NOT IN ('A', 'E', 'I', 'O', 'U');
