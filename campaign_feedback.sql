CREATE DATABASE campaign_feedback;

USE campaign_feedback;

CREATE TABLE feedback (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100),
  email VARCHAR(100),
  feedback TEXT,
  rating INT,
  submission_date DATETIME DEFAULT CURRENT_TIMESTAMP
);