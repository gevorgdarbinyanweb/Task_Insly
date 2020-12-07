
SELECT * FROM tbl_employee emp
JOIN tbl_employee_info emp_info ON emp.id = emp_info.employee_id
JOIN tbl_language lang ON emp_info.language_id = lang.id