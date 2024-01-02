-- https://www.hackerrank.com/challenges/earnings-of-employees/problem

SELECT
    (SELECT MAX(salary * months) FROM Employee) AS max_salary,
    (SELECT COUNT(1) FROM Employee WHERE salary * months = (SELECT MAX(salary * months) FROM Employee));