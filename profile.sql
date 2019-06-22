use srmswebcheck;
CREATE TABLE projects(
	id INT NOT NULL,
    pid INT NOT NULL PRIMARY KEY auto_increment,
    department VARCHAR(50) NOT NULL,
    idea VARCHAR(50) NOT NULL,
    statement LONGTEXT NOT NULL,
    details LONGTEXT NOT NULL,
    team LONGTEXT NOT NULL,
    upload TEXT NOT NULL
);