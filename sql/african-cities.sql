-- https://www.hackerrank.com/challenges/african-cities/problem

SELECT ci.NAME
FROM CITY AS ci
 INNER JOIN COUNTRY AS co ON co.CODE = ci.COUNTRYCODE
WHERE co.CONTINENT = "Africa";
