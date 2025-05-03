CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    phone_number VARCHAR(15),
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
ALTER TABLE users
ADD COLUMN is_employer TINYINT(1) DEFAULT 0 AFTER password;

CREATE TABLE users_education (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    
    -- 10th details
    class_10_school_name VARCHAR(255) NOT NULL,
    class_10_board_name VARCHAR(100) NOT NULL,
    class_10_percentage_cgpa VARCHAR(10) NOT NULL,
    
    -- 12th details
    class_12_school_name VARCHAR(255) NOT NULL,
    class_12_board_name VARCHAR(100) NOT NULL,
    class_12_percentage_cgpa VARCHAR(10) NOT NULL,
    
    -- Graduation details
    graduation_college_name VARCHAR(255) NOT NULL,
    graduation_specialization VARCHAR(100) NOT NULL,
    graduation_cgpa VARCHAR(10) NOT NULL,
    
    -- Post-graduation details (optional)
    post_graduation_college_name VARCHAR(255),
    post_graduation_specialization VARCHAR(100),
    post_graduation_cgpa VARCHAR(10),
    
    -- Skills
    skills TEXT,
    
    -- Experience
    organization_name VARCHAR(255),
    experience_duration_years DECIMAL(4,2),
    
    -- Certificates and Resume
    certificate_links TEXT,
    resume_path VARCHAR(255),
    
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    
    -- Setting up relationship with users table
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

RENAME TABLE users_education TO employee_details;

CREATE TABLE job_details (
    id INT AUTO_INCREMENT PRIMARY KEY,
    job_title VARCHAR(255) NOT NULL,
    category VARCHAR(100) NOT NULL,
    no_of_vacancies INT NOT NULL,
    city VARCHAR(100) NOT NULL,
    salary VARCHAR(100),
    job_type VARCHAR(50), -- like Full-time, Part-time, internship.
    designation VARCHAR(100),
    job_description TEXT,
    qualification VARCHAR(255),
    company_name VARCHAR(255) NOT NULL,
    company_email VARCHAR(100) NOT NULL,
    location VARCHAR(255),
    website VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

ALTER TABLE job_details
ADD COLUMN status TINYINT(1) DEFAULT 0 AFTER website;

ALTER TABLE job_details
CHANGE COLUMN status status ENUM('open', 'closed') DEFAULT 'open' AFTER website;


CREATE TABLE applied_jobs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    job_id INT NOT NULL,
    applied_on DATE NOT NULL,
    status ENUM('application sent', 'viewed', 'rejected', 'interview scheduled') DEFAULT 'application sent',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    
    -- Foreign key constraints
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (job_id) REFERENCES job_details(id) ON DELETE CASCADE
);


CREATE TABLE leads (
    id INT AUTO_INCREMENT PRIMARY KEY,
    job_id INT NOT NULL,
    emp_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

    -- Foreign key constraints
    FOREIGN KEY (job_id) REFERENCES job_details(id) ON DELETE CASCADE,
    FOREIGN KEY (emp_id) REFERENCES users(id) ON DELETE CASCADE
);


