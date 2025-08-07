CREATE DATABASE job_portal;
USE job_portal;
CREATE TABLE jobs (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255),
  description TEXT,
  location VARCHAR(100)
);
INSERT INTO jobs (title, description, location) VALUES
('Frontend Developer', 'HTML, CSS, JS expert needed', 'Mumbai'),
('PHP Developer', 'Work on server-side logic with PHP', 'Pune');