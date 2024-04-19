create database Sistema;
create user tato identified by "47314244";
use Sistema;
grant select, update, delete,insert
on *.*
to Tato;

CREATE TABLE IF NOT EXISTS usuarios (
    gmail varchar(25) primary key,
    Contraseña varchar(12),
    nombre VARCHAR(12) NOT NULL
);

SELECT gmail, contraseña
FROM usuarios
WHERE gmail = 'tatogarcia11112@gmail.com';
