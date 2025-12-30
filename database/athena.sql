CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin','chef','member') NOT NULL
);

CREATE TABLE projects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    description TEXT,
    status ENUM('active','disabled','completed') DEFAULT 'active',
    start_date DATE,
    end_date DATE,
    chef_id INT NOT NULL,
    FOREIGN KEY (chef_id) REFERENCES users(id)
);

CREATE TABLE sprints ( 
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    description TEXT,
    status ENUM('upcoming','active','completed') DEFAULT 'upcoming',
    start_date DATE,
    end_date DATE,
    project_id INT NOT NULL,
    FOREIGN KEY (project_id) REFERENCES projects(id)
);

CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    description TEXT,
    status ENUM('todo','in_progress','done') DEFAULT 'todo',
    priority ENUM('low','medium','high') DEFAULT 'medium',
    type ENUM('personal','sprint') NOT NULL,
    created_by INT NOT NULL,
    sprint_id INT,
    FOREIGN KEY (created_by) REFERENCES users(id),
    FOREIGN KEY (sprint_id) REFERENCES sprints(id)
);

CREATE TABLE task_users (
    task_id INT NOT NULL,
    user_id INT NOT NULL,
    PRIMARY KEY (task_id, user_id),
    FOREIGN KEY (task_id) REFERENCES tasks(id),
    FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE comments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    content TEXT NOT NULL,
    user_id INT NOT NULL,
    task_id INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (task_id) REFERENCES tasks(id)
);

CREATE TABLE notifications (
    id INT AUTO_INCREMENT PRIMARY KEY,
    type ENUM('task_created','task_updated','task_deleted','assigned_to_project','removed_from_project','project_deleted','sprint_created','sprint_updated','status_changed') NOT NULL,
    message VARCHAR(255) NOT NULL,
    is_read BOOLEAN DEFAULT FALSE,
    user_id INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

--@block
DROP TABLE IF EXISTS notifications;
DROP TABLE IF EXISTS comments;
DROP TABLE IF EXISTS task_users;
DROP TABLE IF EXISTS tasks;
DROP TABLE IF EXISTS sprints;
DROP TABLE IF EXISTS projects;
DROP TABLE IF EXISTS users;