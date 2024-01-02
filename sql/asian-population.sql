-- https://www.hackerrank.com/challenges/asian-population/problem

SELECT SUM(ci.POPULATION)
FROM CITY AS ci
 INNER JOIN COUNTRY AS co ON co.CODE = ci.COUNTRYCODE
WHERE co.CONTINENT = "Asia";