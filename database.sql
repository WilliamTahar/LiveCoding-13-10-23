DROP DATABASE IF EXISTS tp_wcs;

CREATE DATABASE tp_wcs;

use tp_wcs;

CREATE TABLE article (
    id INT NOT NULL AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    created DATETIME DEFAULT NOW(),
    PRIMARY KEY (id)
);

INSERT INTO article (title, content) VALUES ('Comment on fait du PHP ? ', 'Ecoute ton prof ....');
