# php-calculator

# PHP version: 8.2.12

You need to configure your database, or you can just run "db_config.php":

--------------------------------------------------
1. Creating a database "calculator"

CREATE DATABASE IF NOT EXISTS calculator;
--------------------------------------------------
2. Using a database "calculator"

USE calculator;
--------------------------------------------------
3. Creating table "history"

CREATE TABLE IF NOT EXISTS history (
    id INT PRIMARY KEY AUTO_INCREMENT,
    history_result VARCHAR(255)
);
--------------------------------------------------
4. Inserting into the table "history"

INSERT INTO history (history_result) VALUES
    ('1 + 2 = 3'),
    ('2 * 15 = 30'),
    ('12 / 2 = 6'),
    ('2 ^ 5 = 32'),
    ('8 - 2 = 6'),
    ('2 ^ 8 = 256');
--------------------------------------------------