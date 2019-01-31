CREATE DATABASE mensajeria;
USE mensajeria;
CREATE USER 'user'@'localhost' IDENTIFIED BY 'user';
GRANT ALL ON mensajeria.* TO 'user'@'localhost';
CREATE TABLE usuarios(
  id INT(3) auto_increment,
  nombre VARCHAR(30) NOT NULL,
  apellido1 VARCHAR(30) NOT NULL,
  apellido2 VARCHAR(30) NOT NULL,
  login VARCHAR(16) NOT NULL,
  password VARCHAR(30) NOT NULL,
  CONSTRAINT id_pk PRIMARY KEY (id),
  CONSTRAINT login_uk UNIQUE (login)
);

CREATE TABLE mensajes(
  id_mensaje INT(3) auto_increment,
  mensaje VARCHAR(300) NOT NULL,
  id_usuario INT(3) NOT NULL,
  CONSTRAINT id_mensaje PRIMARY KEY (id_mensaje),
  CONSTRAINT id_usuario_fk FOREIGN KEY (id_usuario) REFERENCES usuarios(id)
);

CREATE TABLE votaciones(
  id_usuario INT(3) NOT NULL,
  id_mensaje INT(3) NOT NULL,
  voto INT(2) NOT NULL,
  CONSTRAINT id_votoPK PRIMARY KEY (id_usuario,id_mensaje),
  CONSTRAINT id_usuarioFK1 FOREIGN KEY (id_usuario) REFERENCES usuarios(id),
  CONSTRAINT id_mensajeFK2 FOREIGN KEY (id_mensaje) REFERENCES mensajes(id_mensaje)
);

SELECT COUNT(voto) as CUENTA FROM votaciones WHERE id_mensaje=5;
SELECT SUM(voto) as SUMA FROM votaciones WHERE id_mensaje=5;

SELECT * FROM mensajes;
SELECT * FROM usuarios;
SELECT * FROM votaciones;


