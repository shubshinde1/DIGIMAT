
USE digitisematrix;

CREATE TABLE contactus (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    company VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    email VARCHAR(255) NOT NULL,
    paidmedia BOOLEAN,
    digitalexperience BOOLEAN,
    emails BOOLEAN,
    contentcreation BOOLEAN,
    strategies BOOLEAN,
    other BOOLEAN
);
