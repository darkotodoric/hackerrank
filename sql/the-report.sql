-- https://www.hackerrank.com/challenges/the-report/problem

SELECT IF(g.grade >= 8, s.name, NULL), g.grade, s.marks
FROM Students AS s
 INNER JOIN Grades AS g ON s.marks >= g.min_mark AND s.marks <= g.max_mark
ORDER BY g.grade DESC, s.name ASC;