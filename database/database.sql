DROP TABLE IF EXISTS characters;

CREATE TABLE characters (
id_character INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(24) NOT NULL,
age INT NOT NULL,
gender CHAR(1) NOT NULL
);

INSERT INTO characters (name, age, gender)
VALUES
('El Fary', 86, 'N'),
('El Cigala', 45, 'M'),
('El Churumbel', 33,'M'),
('El Kiko', 1, 'F'),
('El Escalona', 51,'M');
