-- https://www.hackerrank.com/challenges/the-company/problem

SELECT c.company_code, c.founder,
    COUNT(DISTINCT lm.lead_manager_code),
    COUNT(DISTINCT sm.senior_manager_code),
    COUNT(DISTINCT m.manager_code),
    COUNT(DISTINCT e.employee_code)
FROM Company AS c
 INNER JOIN Lead_Manager AS lm ON c.company_code = lm.company_code
 INNER JOIN Senior_Manager AS sm ON lm.lead_manager_code = sm.lead_manager_code
 INNER JOIN Manager AS m ON sm.senior_manager_code = m.senior_manager_code
 INNER JOIN Employee AS e ON m.manager_code = e.manager_code
GROUP BY c.company_code, c.founder
ORDER BY c.company_code ASC;