CREATE DATABASE IF NOT EXISTS komal_creations;
USE komal_creations;

CREATE TABLE admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE courses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    course_name_en VARCHAR(100) NOT NULL,
    course_name_pa VARCHAR(100) NOT NULL,
    description_en TEXT,
    description_pa TEXT,
    price DECIMAL(10,2) NOT NULL,
    duration VARCHAR(50) DEFAULT 'Per Month',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    email VARCHAR(100),
    address TEXT,
    language_preference VARCHAR(10) DEFAULT 'en',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE enrollments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_id INT NOT NULL,
    course_id INT NOT NULL,
    enrollment_date DATE NOT NULL,
    fee_status VARCHAR(50) DEFAULT 'Pending',
    status VARCHAR(50) DEFAULT 'Active',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (student_id) REFERENCES students(id) ON DELETE CASCADE,
    FOREIGN KEY (course_id) REFERENCES courses(id) ON DELETE CASCADE
);

CREATE TABLE certificates (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_id INT NOT NULL,
    course_id INT NOT NULL,
    certificate_number VARCHAR(100) NOT NULL UNIQUE,
    issue_date DATE NOT NULL,
    completion_status VARCHAR(50) DEFAULT 'Completed',
    verification_code VARCHAR(100) NOT NULL UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (student_id) REFERENCES students(id) ON DELETE CASCADE,
    FOREIGN KEY (course_id) REFERENCES courses(id) ON DELETE CASCADE
);

CREATE TABLE gallery (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title_en VARCHAR(100),
    title_pa VARCHAR(100),
    image_path VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE contact_messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    email VARCHAR(100),
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO courses (course_name_en, course_name_pa, description_en, description_pa, price, duration) VALUES
('Simple Stitching', 'ਸਿੰਪਲ ਸਟਿਚਿੰਗ', 'Simple suits, palazzo, frock, kurtis, simple top', 'ਸਧਾਰਨ ਸੂਟ, ਪਲਾਜ਼ੋ, ਫਰਾਕ, ਕੁਰਤੀ, ਸਧਾਰਨ ਟੌਪ', 800, 'Per Month'),
('Hand Embroidery & Painting', 'ਹੱਥ ਕੜਾਹੀ ਅਤੇ ਪੇਂਟਿੰਗ', 'Hand embroidery and fabric painting', 'ਹੱਥ ਕੜਾਹੀ ਅਤੇ ਕਪੜੇ ਉੱਤੇ ਪੇਂਟਿੰਗ', 1000, 'Per Month'),
('Designer Dresses', 'ਡਿਜ਼ਾਈਨਰ ਡਰੈੱਸਸ', 'Top, shirt, gown and all dresses', 'ਟੌਪ, ਸ਼ਰਟ, ਗਾਊਨ ਅਤੇ ਹੋਰ ਸਾਰੇ ਡਰੈੱਸਸ', 1500, 'Per Month');

-- default admin login
-- username: admin
-- password: admin123
INSERT INTO admins (username, password) VALUES
('admin', '$2y$10$8G2A0NnJzA1Q4A4nVz3b3e6QhL7x6R7O2gkq6WQYg4v1V1zJxYl6W');