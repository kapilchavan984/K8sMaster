CREATE DATABASE IF NOT EXISTS hospital_db;
USE hospital_db;

CREATE TABLE appointments (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
phone VARCHAR(20),
doctor VARCHAR(100),
appointment_date DATE,
slot VARCHAR(50),
message TEXT
);