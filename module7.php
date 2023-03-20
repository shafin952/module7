
CREATE DATABASE xyz;   //  to create a database

USE xyz_corp;   //  use/call database which you want to work with

CREATE TABLE employees (   //  create employees table with its necessary headers
id INT PRIMARY KEY,
name VARCHAR(255),
age INT,
salary INT,
department_id INT
);

CREATE TABLE departments (   //  create departments table with its necessary headers
id INT PRIMARY KEY,
name VARCHAR(255),
manager VARCHAR(255)
);
 :
INSERT INTO employees (id, name, age, salary, department_id)   //  insert data/value into employees table
VALUES (1, 'John Doe', 30, 50000, 1),
(2, 'Jane Smith', 35, 60000, 2),
(3, 'Bob Johnson', 40, 70000, 1);

INSERT INTO departments (id, name, manager)   //  insert data/value into departments table
VALUES (1, 'Sales', 'John'),
(2, 'Marketing', 'Jane');


      //  a. To select all columns and rows from the employees table:  SELECT * FROM employees;    Select All Exployees data from employees.
      //  b. Write a query to select only the name and salary columns of all employees with a salary greater than 50000. SELECT name, salary FROM employees WHERE salary > 50000;  SELECT name, salary Column from employees table and show data if  salary > 50000.
      //  c. Write a query to calculate the average salary of all employees. SELECT AVG(salary) FROM employees;  Average salary column for employees Table data .
      //  d. Write a query to count the number of employees who work in the "Marketing" department. SELECT COUNT(*) FROM employees WHERE department_id = (SELECT id FROM departments WHERE name = 'Marketing');    Counting How many exployees available in employees table who are belongs to Marketing Department .
      //  e. Write a query to update the salary column of the employee with an id of 1001 to 60000.UPDATE employees SET salary = 60000 WHERE id = 1;  Update exact employee salary whos id is 1 .
      //  f. Write a query to delete all employees whose salary is less than 30000.
        

    table, here are the SQL commands to answer the questions:

       //  a. Write a query to select all columns and rows from the departments table. SELECT * FROM departments;    Select All columns data from departments. 
       //  b. Write a query to select only the name and manager columns of the "Finance" department.SELECT name, manager FROM departments WHERE name='Finance' ;    SELECT will show 2 columns (name, manager) FROM "departments" table who works in Finance departments.
       //  c. Write a query to calculate the total number of employees in each department. SELECT departments.name, COUNT(*) FROM employees JOIN departments ON
                    employees.department_id=departments.id GROUP BY departments.name;  This query will show total count of peoples depanding on departments .
       //  d. Write a query to insert a new department called "Research" with a manager named "John Doe" INSERT INTO departments (id,name, manager) VALUES (3,'Research', 'John Doe' );    This query will input new data to our database in department table .

