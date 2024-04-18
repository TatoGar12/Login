create database Sistema;
create user Tato identified by "987654321";
use Sistema;

CREATE TABLE IF NOT EXISTS usuarios (
    gmail varchar(25) primary key,
    Contraseña varchar(12),
    nombre VARCHAR(12) NOT NULL
);

SELECT gmail, contraseña
FROM usuarios
WHERE gmail = 'tatogarcia11112@gmail.com';
