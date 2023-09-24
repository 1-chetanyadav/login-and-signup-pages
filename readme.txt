i used xamp and this is the database query>>

# database > videodb
# table > users


CREATE TABLE users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    emailnumber VARCHAR(255) NOT NULL,
    fname VARCHAR(255) NOT NULL,
    lname VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);
