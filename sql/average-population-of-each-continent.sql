-- https://www.hackerrank.com/challenges/average-population-of-each-continent/problem

SELECT co.CONTINENT, FLOOR(AVG(ci.POPULATION))
FROM CITY AS ci
 INNER JOIN COUNTRY AS co ON co.CODE = ci.COUNTRYCODE
GROUP BY co.CONTINENT;