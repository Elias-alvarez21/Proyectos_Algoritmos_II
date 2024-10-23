CREATE DATABASE IF NOT EXISTS tasks;
USE tasks;

CREATE TABLE IF NOT EXISTS areas (
    area_id INT AUTO_INCREMENT PRIMARY KEY,
    area_name VARCHAR(100) NOT NULL
);

CREATE TABLE IF NOT EXISTS users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(100) NOT NULL
);

CREATE TABLE IF NOT EXISTS tasks (
    task_id INT AUTO_INCREMENT PRIMARY KEY,
    task_name VARCHAR(100) NOT NULL,
    description TEXT,
    start_date DATE,
    end_date DATE,
    area_id INT,
    user_id INT,
    priority TINYINT,
    status ENUM('started', 'in progress', 'finished', 'inconclusive'),
    FOREIGN KEY (area_id) REFERENCES areas(area_id) ON DELETE CASCADE,
    FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE
);

INSERT INTO areas (area_name) VALUES
('Software Development'),
('Project Management'),
('Graphic Design'),
('Marketing'),
('Human Resources'),
('Finance'),
('Customer Service'),
('Quality Assurance'),
('Sales'),
('Research and Development');

INSERT INTO users (user_name, email, password) VALUES
('John Doe', 'john@example.com', 'password123'),
('Alice Smith', 'alice@example.com', 'pass456'),
('Bob Johnson', 'bob@example.com', 'secure789'),
('Emma Brown', 'emma@example.com', '1234word'),
('Michael Davis', 'michael@example.com', 'passphrase'),
('Jennifer Wilson', 'jennifer@example.com', 'password567'),
('David Miller', 'david@example.com', 'p@ssw0rd'),
('Laura Taylor', 'laura@example.com', 'securepass'),
('Matthew Anderson', 'matthew@example.com', 'my_password'),
('Jessica Martinez', 'jessica@example.com', 'password890');

INSERT INTO tasks (task_name, description, start_date, end_date, area_id, user_id, priority, status) VALUES
('Design website layout', 'Create wireframes and design mockups for the new website.', '2024-06-01', '2024-06-15', 1, 1, 2, 'started'),
('Implement backend functionality', 'Develop server-side code for the website.', '2024-06-05', '2024-06-20', 1, 2, 1, 'in progress'),
('Develop logo concept', 'Brainstorm ideas and sketch initial concepts for the company logo.', '2024-06-10', '2024-06-15', 3, 3, 3, 'finished'),
('Create marketing campaign', 'Plan and execute a marketing campaign to promote the new product launch.', '2024-06-15', '2024-07-01', 4, 4, 2, 'in progress'),
('Conduct job interviews', 'Interview candidates for open positions in the company.', '2024-06-20', '2024-07-05', 5, 5, 1, 'started'),
('Prepare financial reports', 'Compile financial data and generate reports for the quarterly review.', '2024-06-25', '2024-07-10', 6, 6, 4, 'inconclusive'),
('Handle customer inquiries', 'Respond to customer queries and resolve issues via phone and email.', '2024-07-01', '2024-07-15', 7, 7, 3, 'finished'),
('Perform software testing', 'Test software applications to identify bugs and ensure quality.', '2024-07-05', '2024-07-20', 8, 8, 2, 'in progress'),
('Contact potential clients', 'Reach out to prospects and schedule meetings to discuss business opportunities.', '2024-07-10', '2024-07-25', 9, 9, 1, 'started'),
('Conduct research experiments', 'Perform experiments and analyze data for ongoing research projects.', '2024-07-15', '2024-07-30', 10, 10, 3, 'finished'),
('Review code for security vulnerabilities', 'Audit source code for security flaws and implement fixes.', '2024-07-20', '2024-08-05', 1, 1, 2, 'in progress'),
('Update employee handbook', 'Revise company policies and procedures in the employee handbook.', '2024-07-25', '2024-08-10', 2, 2, 4, 'inconclusive'),
('Design promotional materials', 'Create banners, flyers, and posters for upcoming events.', '2024-07-30', '2024-08-15', 3, 3, 3, 'finished'),
('Optimize ad campaigns', 'Fine-tune advertising strategies to improve ROI and reach target audience.', '2024-08-05', '2024-08-20', 4, 4, 2, 'in progress'),
('Conduct performance evaluations', 'Evaluate employee performance and provide feedback for improvement.', '2024-08-10', '2024-08-25', 5, 5, 1, 'started'),
('Prepare budget forecast', 'Forecast financial projections and allocate resources for upcoming projects.', '2024-08-15', '2024-08-30', 6, 6, 4, 'inconclusive'),
('Respond to customer reviews', 'Monitor online reviews and address customer feedback to improve satisfaction.', '2024-08-20', '2024-09-05', 7, 7, 3, 'finished'),
('Conduct system integration testing', 'Integrate software components and test interoperability for new system.', '2024-08-25', '2024-09-10', 8, 8, 2, 'in progress'),
('Organize networking events', 'Coordinate events to facilitate networking and collaboration among professionals.', '2024-08-30', '2024-09-15', 9, 9, 1, 'started'),
('Collect and analyze experimental data', 'Gather data from experiments and analyze results for scientific publication.', '2024-09-05', '2024-09-20', 10, 10, 3, 'finished');

SELECT * FROM areas;

SELECT T.task_id, A.area_name, T.task_name, T.start_date, T.end_date, T.priority, T.status FROM
areas A INNER JOIN tasks T ON T.area_id = A.area_id;

SELECT T.task_id, A.area_name, T.task_name, T.start_date, T.end_date, T.priority, T.status FROM
areas A INNER JOIN tasks T ON T.area_id = A.area_id WHERE T.user_id = ?;

INSERT INTO tasks
(task_name, description, start_date, end_date, area_id, user_id, priority, status) 
VALUES ('task_name', 'description', CURDATE(), CURDATE(), ?, ?, 1, 'started');

UPDATE tasks 
SET task_name = 'task_name' , description = 'description', start_date = CURDATE(), end_date = CURDATE(), area_id = area_id, user_id = user_id, priority = priority, status = 'inconclusive' 
WHERE task_id = ?;

DELETE FROM tasks WHERE task_id = ?;

SELECT user_id, email, password FROM users WHERE email = '' AND password = '1234';
